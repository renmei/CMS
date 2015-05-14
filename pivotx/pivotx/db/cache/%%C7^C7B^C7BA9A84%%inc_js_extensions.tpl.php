<?php /* Smarty version 2.6.26, created on 2015-05-14 12:02:45
         compiled from inc_js_extensions.tpl */ ?>
// Code borrowed from comments on http://maymay.net/blog/2008/06/15/ridiculously-simple-javascript-version-string-to-object-parser/ 
function versionCompare(minimum, current) {
    var parseVersion = function(version) {
        version = /(\d+)\.?(\d+)?\.?(\d+)?/.exec(version);
        return {
           major: parseInt(version[1]) || 0,
           minor: parseInt(version[2]) || 0,
           patch: parseInt(version[3]) || 0
        }
    };
    minimum = parseVersion(minimum);
    current = parseVersion(current);
    if (minimum.major != current.major)
        return (current.major > minimum.major);
    else {
        if (minimum.minor != current.minor)
            return (current.minor > minimum.minor);
        else {
            if (minimum.patch != current.patch) {
                return (current.patch > minimum.patch);
            }
            else {
                return true;
            }
        }
    }
};