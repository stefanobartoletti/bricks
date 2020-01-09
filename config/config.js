{
    "css": {
        "src": "./src/sass/**/*.scss",
        "dist": "./dist/css/",
        "watch": "./src/sass/**/*.scss",
        "purge": {
            "content": [
                "./**/*.php",
                "./src/js/**/*.js",
                "./src/js/**/*.mjs"
            ]
        }
    },
    "js": {
        "src": "./src/js/**/*.js",
        "dist": "./dist/js/",
        "watch": [
            "./src/js/**/*.js",
            "./src/js/**/*.mjs"
        ]
    },
    "php": {
        "watch": [
            "./**/*.php",
            "!node_modules/**",
            "!lib/**",
            "!vendor/**"
        ]
    },
    "img": {
        "src": "./src/img/**/*.{png,jpg,gif,svg}",
        "dist": "./dist/img/",
        "watch": "./src/img/**/*.{png,jpg,gif,svg}"
    },
    "fonts": {
        "src": "./src/fonts/**/*.ttf",
        "dist": "./dist/fonts/",
        "watch": "./src/fonts/**/*.ttf"
    },
    "icons": {
        "src": "./node_modules/@fortawesome/fontawesome-free/js/all.js",
        "dist": "./dist/fonts/",
        "watch": "./src/fonts/**/*.ttf"
    },
    "i18n": {
        "dist": "./languages/"
    },
    "pkg": {
        "dist": "./packages/"
    }
}