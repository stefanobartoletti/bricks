/**
 * Gulp variables meant to change on a single project basis.
 * These are defined here to keep gulpfile.js clean.
 */

// --- Browser ---

// Site URL (Browsersync, critical css)
const siteUrl = 'http://localhost:8080/sbbase';
exports.siteUrl = siteUrl;


// --- CSS ---

// purgecss whitelists
const purgeWLP = [
    /^carousel-item.*/,     // Bootstrap Carousel Animation
    /collapsing/,           // Bootstrap Navbar Animation
    /show/,                 // Bootstrap Dropdown
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
        'envelope',
        'share-alt',
    ],
    fab: [ 
        'facebook-f',
        'linkedin-in',
        'instagram',
        'twitter',
        'pinterest-p',
        'get-pocket',
        'telegram-plane',
    ] 
};
exports.iconsUsed = iconsUsed;

// --- Zip package ---

const pkgSrc = [
    './**',
    '!.vscode/**',
    '!tools/**',
    '!node_modules/**',
    '!packages/**',
    '!src/**',
    '!vendor/**',
    '!.browserslistrc',
    '!.directory',
    '!.gitignore',
    '!gulpfile.js',
    '!README.md',
    '!*.json',
    '!*.lock',
    '!*.todo',
    '!pnpm-lock.yaml',
];
exports.pkgSrc = pkgSrc;