module.exports = {

    // --- Project details ---

    textdomain: 'bricks',
    siteurl: 'http://localhost:8080/sbbase',

    // --- CSS ---

    css: {
        purge: {
            // Purgecss whitelists
            wl: [],
            wlp: [
                /^carousel-item.*/,     // Bootstrap Carousel Animation
                /collapsing/,           // Bootstrap Navbar Animation
                /show/,                 // Bootstrap Dropdown
            ],
            wlpc: []
        }
    },

    // --- Icons ---

    icons: {
        used: {
            fal: [],
            far: [],
            fas: [ 
                'angle-up',
                'envelope',
                'share-alt',
                'search',
            ],
            fab: [ 
                'facebook-f',
                'linkedin-in',
                'instagram',
                'twitter',
                'pinterest-p',
                'get-pocket',
                'telegram-plane',
                'whatsapp',
            ] 
        }
    }
    
}