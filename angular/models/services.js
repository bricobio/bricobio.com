/**
Copyright 2015 Philippe Hebert (https://github.com/p-hebert)

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
**/

var services = angular.module('Services', []);

/**
* Service handling the internationalization of the UI.
* Acts as a wrapper around the i18n.js variable.
**/
services.factory('Lang', function Lang(){
  var lang = i18n;
  var languages = [];
  for (var key in lang) {
      languages.push(key);
  }
  lang.all_lang = languages;
  lang.curr_lang = 'en_us';
  lang.setLanguage = function(language){
    for(var i = 0 ; i < this.all_lang.length ; i++){
      if(this.all_lang[i] == language){
        this.curr_lang = this.all_lang[i];
      }
    }
  };
  lang.getLanguage = function(){
    return this.curr_lang;
  };

  lang.get = function(getstr){

    //Getting all of the text for the set language
    var all_indexes = this[this.curr_lang];
    //Finding next index of the dot or the next opening square bracket
    var dotindex = getstr.indexOf('.');
    var arrindex = getstr.indexOf('[');
    var is_dotindex;
    var str;
    while(dotindex !== -1 || arrindex !== -1){

      //Determines if next level is object or array
      is_dotindex = (dotindex < arrindex && dotindex !== -1) || arrindex === -1;

      //Finding the json index
      str = getstr.substring(0, (is_dotindex)? dotindex:arrindex);

      if(all_indexes[str] !== undefined){
        //console.log(all_indexes[str]);
        all_indexes = all_indexes[str];
      }else{
        return undefined;
      }

      //Finds the array index between the square brackets
      if(!is_dotindex){
        str = getstr.substring(arrindex+1, getstr.indexOf(']'));
        //console.log('!is_dotindex str: '+ str);
        if(all_indexes[str] !== undefined){
          //console.log(all_indexes[str]);
          all_indexes = all_indexes[str];
        }else{
          return undefined;
        }
      }

      //Update indexes and get string
      getstr = getstr.substring(((is_dotindex)? dotindex:getstr.indexOf(']'))+1, getstr.length);
      dotindex = getstr.indexOf('.');
      arrindex = getstr.indexOf('[');

      //Checks for extreme cases (multidimensional arrays, dot right after array notation)
      while(arrindex === 0){

        str = getstr.substring(arrindex+1, getstr.indexOf(']'));

        if(all_indexes[str] !== undefined){
          all_indexes = all_indexes[str];
        }else{
          return undefined;
        }
        getstr = getstr.substring(((is_dotindex)? dotindex:getstr.indexOf(']'))+1, getstr.length);
        dotindex = getstr.indexOf('.');
        arrindex = getstr.indexOf('[');
      }
      if(dotindex === 0){
        is_dotindex = true;
        getstr = getstr.substring(1, getstr.length);
        dotindex = getstr.indexOf('.');
        arrindex = getstr.indexOf('[');
        if(dotindex === 0 || arrindex === 0){
          return undefined;
        }
      }
    }

    //Getting the final value of interest
    if(is_dotindex){
      if(all_indexes[getstr] !== undefined){
        return all_indexes[getstr];
      }else{
        return undefined;
      }
    }else{
      return all_indexes;
    }

  };
  return lang;
});
