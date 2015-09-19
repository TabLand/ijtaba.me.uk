//supress errors
phantom.onError = function(msg,trace){}

var page = require('webpage').create();
 
page.onResourceError = function(resourceError) {
    page.reason = resourceError.errorString;
    page.reason_url = resourceError.url;
};
 
page.open(
    "http://www.drivejoy.co.uk/nissan/pixo/b6186b93-e12c-4692-857f-a4001e46946e",
    function (status) {
        if ( status !== 'success' ) {
            console.log(
                "Error opening url \"" + page.reason_url
                + "\": " + page.reason
            );
            phantom.exit( 1 );
        } else {
            console.log(page.content);
            phantom.exit( 0 );
        }
    }
);
