import $ from 'jquery';

class Search {
    // 1. Describe and create/initiate our object
    constructor() {
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.events();
    }

    // 2. Events
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
        $(document).on("keyup", this.keyPressDispatcher.bind(this));
    }

    // 3. Methods (function/action)

    keyPressDispatcher() {
        console.log(e.keyCode);

        if (e.keyCode == 83) {
            this.openOverlay();
        }
    }

    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
    }

}

export default Search;