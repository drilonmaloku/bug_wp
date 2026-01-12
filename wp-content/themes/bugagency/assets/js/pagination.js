jQuery(document).ready(function($) {
    // Ajax pagination functionality
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        
        var url = $(this).attr('href');
        if (url) {
            loadPaginatedContent(url);
        }
    });
    
    function loadPaginatedContent(url) {
        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function() {
                // Add loading indicator
                $('.content-area').append('<div class="loading-indicator">Loading...</div>');
            },
            success: function(data) {
                // Remove loading indicator
                $('.loading-indicator').remove();
                
                // Extract content from response
                var newContent = $(data).find('.content-area').html();
                $('.content-area').html(newContent);
                
                // Update URL without page reload
                if (history.pushState) {
                    history.pushState(null, null, url);
                }
            },
            error: function() {
                $('.loading-indicator').remove();
                console.log('Error loading paginated content');
            }
        });
    }
});
