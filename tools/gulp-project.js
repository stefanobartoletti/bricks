/**
 * Gulp variables meant to change on a single project basis.
 * These are defined here to keep gulpfile.js clean.
 */

// --- CSS ---

// purgecss whitelists
const purgeWLP = [
    /^carousel-item.*/,     // Bootstrap Carousel Animation
    /collapsing/,           // Bootstrap Navbar Animation
    /^admin-bar/,           // WP admin bar when logged in
    /^svg$/,                // For styling Font Awesome
];
exports.purgeWLP = purgeWLP;


// --- Icons ---

// faMinify used icons
const iconsUsed = {
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
const siteUrl = 'http://localhost:8080/sbbase';
exports.siteUrl = siteUrl;