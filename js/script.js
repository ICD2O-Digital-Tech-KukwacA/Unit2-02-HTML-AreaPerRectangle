// Copyright (c) 2022 Ms Raffin All rights reserved
//
// Created by: Kukwac
// Created on: Mar 2022
// This file contains the JS functions for index.html

function doMathClicked() {
  // this function does basic math
  document.getElementById('multiply-math').innerHTML = 'The area of a 10" by 44" rectangle = ' + (10 * 44) + '"^2';
  document.getElementById('add-math').innerHTML = 'The perimeter of the rectangle = ' + (10 + 44) + '"';
}