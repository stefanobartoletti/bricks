module.exports = {
    textdomain: 'bricks',
    siteurl: 'http://localhost:8080/sbbase',
    css: {
        purge: {
            wl: [],

            // Whitelist Pattern

            wlp: [
                /^carousel-item.*/,
                /collapsing/,
                /show/,
            ],
            wlpc: []
        }
    },
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
    },
    files: {
        production: [
            'dist/**/*',
            'functions/**/*',
            'languages/**/*',
            'lib/**/*',
            'templates/**/*',
            '*.php',
            'screenshot.png',
            'style.css',
        ]
    }
}