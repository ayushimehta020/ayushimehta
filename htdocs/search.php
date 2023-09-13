<?php
    include "config.php";
    $sql = "SELECT * FROM `stud`";
    $res = mysqli_query($con, $sql);
?>
<script>
    $(document).ready(function()
    {
        $('#txtenr').keyup(function()
        {
            var enr = $(this).val()
            $.ajax ({
                url: "search2.php",
                method: "POST",
                data:
                {
                    enr: enr
                },
                cache: false,
                success: function(response)
                {
                    $('#result').html(response)
                }
            });
        });
    });
</script>
<div class="container mt-2">
    <input type="text" name="txtenr" id="txtenr" class="form-control mt-2">
</div>

<div class="container mt-2" id="result">
</div>