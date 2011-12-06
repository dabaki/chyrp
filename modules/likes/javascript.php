<?php
    define('JAVASCRIPT', true);
    require_once "../../includes/common.php";
    error_reporting(0);
    header("Content-Type: application/x-javascript");
?>
<!-- --><script>
    $(function() {
<<<<<<< HEAD
    
    var lajke = false;
    var unlajke = false; 
    var labeli = "Like";
    
        $(".likepost").click(function() {

			var id = $(this).attr("id").replace(/post_id_/, "");
            var dataString = 'post_id='+ id +'&ajax=true';
            if (lajke == false) { // Nese useri ska bo Like akoma
            lajke = true;
            unlajke=false;
            labeli="Unlike";
            var fullUrl = '<?php echo Config::current()->chyrp_url; ?>/?action=like'
            }
            else if (unlajke == false) {  // Nese useri ka bo Like, dhe shfaqet Unlike
            lajke = false;
            unlajke=true;
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
                        
                        parent.html("("+html.total_likes+") "+labeli);                      
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
