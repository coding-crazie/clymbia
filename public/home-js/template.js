/*
* Admin Layout (cryptoon)
* @requires:jquery: 3.6.0 or later
* @author: Pixelwibes
* @design by: Pixelwibes.
* @event-namespace:cryptoon
* Copyright 2021 Pixelwibes
*/

if (typeof jQuery === "undefined") {
    throw new Error("jQuery plugins need to be before this file");  
}

// theme setting
$(function() {
    "use strict";

    let root = document.documentElement;
    $('.choose-skin li').on('click', function() {
        var $body = $('#mainDiv');
        var $this = $(this);
        var existTheme = $('.choose-skin li.active').data('theme');
        $('.choose-skin li').removeClass('active');
        $body.removeClass('theme-' + existTheme);
        $this.addClass('active');
        $body.addClass('theme-' + $this.data('theme'));
    });

    // Dynamic theme color setting
    $('#primaryColorPicker').colorpicker().on('changeColor', function() {
        root.style.setProperty('--primary-color', $(this).colorpicker('getValue', '#ffffff'));
    });
    $('#secondaryColorPicker').colorpicker().on('changeColor', function() {
        root.style.setProperty('--secondary-color', $(this).colorpicker('getValue', '#ffffff'));
    });

    // LTR/RTL active js
    $('.theme-rtl input:checkbox').on('click', function () {
        if($(this).is(":checked")) {
            $('body').addClass("rtl_mode");
        } else {
            $('body').removeClass("rtl_mode");
        }
    });

    // google font setting
    $('.font_setting input:radio').on('click', function ()  {
        var others = $("[name='" + this.name + "']").map(function () {
            return this.value
        }).get().join(" ")
        console.log(others)
        $('body').removeClass(others).addClass(this.value)
    });

    // light and dark theme setting js
    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
    var currentTheme = localStorage.getItem('theme');
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);
    
        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
        if (currentTheme === 'high-contrast') {
            toggleHcSwitch.checked = true;
            toggleSwitch.checked = false;
        }
    }
    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            $('.theme-high-contrast input[type="checkbox"]').prop("checked", false);
        }
        else {        
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        }    
    }
    function switchHc(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'high-contrast');
            localStorage.setItem('theme', 'high-contrast');
            $('.theme-switch input[type="checkbox"]').prop("checked", false);
        }
        else {        
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        }  
    }
    toggleSwitch.addEventListener('change', switchTheme, false);
    toggleHcSwitch.addEventListener('change', switchHc, false);
});

//tawk



 // do not add in your project

$(function() {
    
    window.oncontextmenu = function () {
        return false;
    }

    $(document).keydown(function (event) {
        if (event.keyCode == 123) {
            return false;
        }
        else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
            return false;
        }
    });

});