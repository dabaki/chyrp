<?php
    define('JAVASCRIPT', true);
    require_once "../../includes/common.php";
    error_reporting(0);
    header("Content-Type: application/x-javascript");
?>
<!-- --><script>
    $(function() {
<<<<<<< HEAD
    
    var likes = false;
    var unlikes = false; 
    var likelabel = "Like";
    
        $(".likepost").click(function() {

			var id = $(this).attr("id").replace(/post_id_/, "");
            var dataString = 'post_id='+ id +'&ajax=true';
            if (likes == false) { // before the user likes the post
            likes = true;
            unlikes=false;
            labeli="Unlike";
            var fullUrl = '<?php echo Config::current()->chyrp_url; ?>/?action=like'
            }
            else if (unlikes == false) {  // after the user likes the post
            likes = false;
            unlikes=true;
            labeli="Like";
            var fullUrl = '<?php echo Config::current()->chyrp_url; ?>/?action=unlike'
           	}
            
            var parent = $(this);
=======
        $(".likepost").click(function() {
            var id = $(this).attr("id").replace(/post_id_/, "");
            var dataString = 'post_id='+ id +'&ajax=true';
            var fullUrl = '<?php echo Config::current()->chyrp_url; ?>/?action=like'
            var parent = $(this);

>>>>>>> 94fdf8728ee90605f72a58d457e90ba2374dc5cd
            $(this).fadeOut(100);
            $.ajax({type: "post",
                    dataType: "json",
                    url: fullUrl,
                    data: dataString,
                    cache: false,
                    success: function(html) {
<<<<<<< HEAD
                        
                        parent.html("("+html.total_likes+") "+likelabel);                      
=======
                        parent.html(html);
>>>>>>> 94fdf8728ee90605f72a58d457e90ba2374dc5cd
                        parent.fadeIn(200);
                    } 
            });
            return false;
<<<<<<< HEAD

			
                   });
    });
<?php Trigger::current()->call("likes_javascript"); ?>
<!-- --></script>


=======
        });
    });
<?php Trigger::current()->call("likes_javascript"); ?>
<!-- --></script>
>>>>>>> 94fdf8728ee90605f72a58d457e90ba2374dc5cd
