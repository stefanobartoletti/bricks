/**
 * Gulp variables meant to change on a single project basis.
 * These are defined here to keep gulpfile.js clean.
 */

// --- CSS ---

// purgecss whitelists
var purgeWLP = [
    /^carousel-item.*/,     // Bootstrap Carousel Animation
    /collapsing/,           // Bootstrap Navbar Animation
    /^admin-bar/,           // WP admin bar when logged in
];
exports.purgeWLP = purgeWLP;


// --- Icons ---

// faMinify used icons
var iconsUsed = {
    // Light (Pro), Regular (Pro), Solid (Free), Brands (Free)
    fal: [],
    far: [],
    fas: [ 
        'angle-up',
    ],
    fab: [ 
        'facebook-f',
        'linkedin-in',
        'instagram',
        'twitter',
    ] 
};
exports.iconsUsed = iconsUsed;


// --- Browser ---

// Browsersync proxy
var siteUrl = 'opensuse-kde:8080/sbbase';
exports.siteUrl = siteUrl;