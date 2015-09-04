<style type="text/css">
	
</style>

<BR/>


<div class="container well">
	<div class="owl-carousel">
    //Nanti you loop di sini Mon
    	<div class="owl2row-item">
    	
        	<div class="item" style="margin-bottom: 10px;">
        		<a href="#">
            		<img class="img-rounded" src="https://aditinputria.files.wordpress.com/2013/03/sack-of-rice01_1.jpg" alt="">
                	<span>Beras Medium, Rp.9.100/kg<br><b>Harga Naik</b></span>
        		</a>
        	</div>
	        <div class="item">
		        <a href="#">
		            <img src="http://www.duajurai.com/wp-content/uploads/2014/10/dagingsapi.jpg" alt="">
		            <span>Telur Ayam Ras, Rp.9.100/kg
		            <br><b>Harga Turun</b></span>
		        </a>
	        </div>
    </div>
    //End Loop
    //Nanti you loop di sini Mon
    <div class="owl2row-item">
        <div class="item" style="margin-bottom: 10px;">
        <a href="#">
            <img src="http://bibitbunga.com/wp-content/uploads/2013/09/cabe-red-habanero.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
        <div class="item">
        <a href="#">
            <img src="http://www.duajurai.com/wp-content/uploads/2014/10/dagingsapi.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
    </div>
    //End Loop
    //Nanti you loop di sini Mon
    <div class="owl2row-item">
        <div class="item" style="margin-bottom: 10px;">
        <a href="#">
            <img src="https://aditinputria.files.wordpress.com/2013/03/sack-of-rice01_1.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
        <div class="item">
        <a href="#">
            <img src="http://www.duajurai.com/wp-content/uploads/2014/10/dagingsapi.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
    </div>
    //End Loop
    //Nanti you loop di sini Mon
    <div class="owl2row-item">
        <div class="item" style="margin-bottom: 10px;">
        <a href="#">
            <img src="http://bibitbunga.com/wp-content/uploads/2013/09/cabe-red-habanero.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
        <div class="item">
        <a href="#">
            <img src="http://www.duajurai.com/wp-content/uploads/2014/10/dagingsapi.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
    </div>
    //End Loop
    //Nanti you loop di sini Mon
    <div class="owl2row-item">
        <div class="item" style="margin-bottom: 10px;">
        <a href="#">
            <img src="https://aditinputria.files.wordpress.com/2013/03/sack-of-rice01_1.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
        <div class="item">
        <a href="#">
            <img src="http://www.duajurai.com/wp-content/uploads/2014/10/dagingsapi.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
    </div>
    //End Loop
    //Nanti you loop di sini Mon
    <div class="owl2row-item">
        <div class="item" style="margin-bottom: 10px;">
        <a href="#">
            <img src="http://bibitbunga.com/wp-content/uploads/2013/09/cabe-red-habanero.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
        <div class="item">
        <a href="#">
            <img src="http://www.duajurai.com/wp-content/uploads/2014/10/dagingsapi.jpg" alt="">
            <span>Telur Ayam Ras, Rp.9.100/kg
            <br><b>Harga Turun</b></span>
        </a>
        </div>
    </div>
    //End Loop
    //Nanti you loop di sini Mon
   
    
    </div>

</div>


<?php


    foreach($data_rataratahariini as $key => $val)
    {
        $val2 = $data_ratarataharikemarin[$key];
        echo "<pre>";
        echo $val->nama_jenis_bahan_pokok;
        echo "<br/>";
        echo $val->harga_ratarata;
        echo "<br/>";
        echo $val->foto_jenis_bahan_pokok;
        echo "<br/>";
        if ($val->harga_ratarata > $val2->harga_ratarata) {
            echo "Harga Naik";
        }
        elseif ($val->harga_ratarata < $val2->harga_ratarata) {
            echo "Harga Turun";
        }
        if ($val->harga_ratarata == $val2->harga_ratarata) {
            echo "Harga Stabil";
        }
        echo "</pre>";
    }
?>



<script>
	   /**
/* START add to scripts.js
/**/
$(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        slideBy: 'page',
        owl2row: 'true', // enable plugin
        owl2rowTarget: 'item', // class for items in carousel div
        owl2rowContainer: 'owl2row-item', // class for items container
        owl2rowDirection: 'utd', // ltr : directions
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});

/**
/* END add to scripts.js
/**/

/**
/* START Save as owl.carousel.2row.js
/**/

/**
 * Owl2row
 * @since 2.0.0
 */
;
(function ($, window, document, undefined) {
    Owl2row = function (scope) {
        this.owl = scope;
        this.owl.options = $.extend(Owl2row.Defaults, this.owl.options);
        //link callback events with owl carousel here

        this.handlers = {
            'initialize.owl.carousel': $.proxy(function (e) {
                if (this.owl.settings.owl2row) {
                    this.build2row(this);
                }
            }, this)
        };

        this.owl.$element.on(this.handlers);
    };

    Owl2row.Defaults = {
        owl2row: 'true',
        owl2rowTarget: 'item',
        owl2rowContainer: 'owl2row-item',
        owl2rowDirection: 'utd' // ltr
    };

    //mehtods:
    Owl2row.prototype.build2row = function (thisScope) {

        var carousel = $('.' + thisScope.owl.options.baseClass);
        var carouselItems = carousel.find('.' + thisScope.owl.options.owl2rowTarget);

        var aEvenElements = [];
        var aOddElements = [];

        $.each(carouselItems, function (index, item) {
            if (index % 2 === 0) {
                aEvenElements.push(item);
            } else {
                aOddElements.push(item);
            }
        });

        carousel.empty();

        switch (thisScope.owl.options.owl2rowDirection) {
            case 'ltr':
                thisScope.leftToright(thisScope, carousel, carouselItems);
                break;

            default:
                thisScope.upTodown(thisScope, aEvenElements, aOddElements, carousel);
        }

    };

    Owl2row.prototype.leftToright = function (thisScope, carousel, carouselItems) {

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        var carouselItemsLength = carouselItems.length;

        var firsArr = [];
        var secondArr = [];

        //console.log(carouselItemsLength);

        if (carouselItemsLength % 2 === 1) {
            carouselItemsLength = ((carouselItemsLength - 1) / 2) + 1;
        } else {
            carouselItemsLength = carouselItemsLength / 2;
        }

        //console.log(carouselItemsLength);

        $.each(carouselItems, function (index, item) {


            if (index < carouselItemsLength) {
                firsArr.push(item);
            } else {
                secondArr.push(item);
            }
        });

        $.each(firsArr, function (index, item) {
            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');

            var firstRowElement = firsArr[index];
            firstRowElement.style.marginBottom = owlMargin + 'px';

            rowContainer.append(firstRowElement)
                .append(secondArr[index]);

            carousel.append(rowContainer);
        });

    };

    Owl2row.prototype.upTodown = function (thisScope, aEvenElements, aOddElements, carousel) {

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        $.each(aEvenElements, function (index, item) {

            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');
            var evenElement = aEvenElements[index];

            evenElement.style.marginBottom = owlMargin + 'px';

            rowContainer.append(evenElement)
                .append(aOddElements[index]);

            carousel.append(rowContainer);
        });
    };

    /**
     * Destroys the plugin.
     */
    Owl2row.prototype.destroy = function () {
        var handler, property;

        for (handler in this.handlers) {
            this.owl.dom.$el.off(handler, this.handlers[handler]);
        }
        for (property in Object.getOwnPropertyNames(this)) {
            typeof this[property] !== 'function' && (this[property] = null);
        }
    };

    $.fn.owlCarousel.Constructor.Plugins['owl2row'] = Owl2row;
})(window.Zepto || window.jQuery, window, document);

/**
/* END Save as owl.carousel.2row.js
/**/
</script>