// --- Portfolio filters ---

var filterButtons = document.querySelectorAll('#portfolio-filter button');

var portfolioItems = document.querySelectorAll('.portfolio-item');

if (filterButtons.length) {

    filterButtons.forEach(function (el) {

        var portfolioCat = el.id;

        if (portfolioCat == 'category-all') {

            el.addEventListener('click', function () {

                portfolioItems.forEach(function (item) {

                    item.classList.remove('portfolio-hidden');

                
                });
            
            });
            
        } else {

            el.addEventListener('click', function () {

                portfolioItems.forEach(function (item) {

                    if (item.classList.contains(portfolioCat)) {

                        item.classList.remove('portfolio-hidden');

                    } else {

                        item.classList.add('portfolio-hidden');
                    
                    }

                });

            });

        };

    });

};
