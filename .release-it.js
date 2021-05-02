module.exports = {
    git: {
      requireBranch: "master",
    },
    github: {
      release: true,
      releaseName: null,
    },
    npm: {
      skipChecks: true,
      publish: false,
    },
    plugins: {
      "@release-it/keep-a-changelog": {
        filename: "CHANGELOG.md",
        addVersionUrl: true,
      },
      "@release-it/bumper": {
        out: {
          file: "style.css",
          type: "text/css",
        }
      }
    }
  }