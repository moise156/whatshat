<?php
 
if (isset($_POST["submit"]))
{
    $content = "";
    for ($a = 0; $a < count($_FILES["videos"]["name"]); $a++)
    {
        $content .= "file " . $_FILES["videos"]["name"][$a] . "\n";
    }
    file_put_contents("mylist.txt", $content);
 
    $command = "/usr/local/bin/ffmpeg -f concat -i mylist.txt -c copy output.mp4";
    system($command);
}
 
?>

<link rel="stylesheet" href="bootstrap-darkly.min.css">
 <input type="file" name="videos[]" class="form-control" required multiple onchange="onFileSelected(this);">
<div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Select videos
                    <input type="file" name="videos[]" class="form-control" required multiple>
                </div>
 
                <input type="submit" name="submit" class="btn btn-primary" value="Merge">
            </form>
        </div>
    </div>
    <div id="videos"></div>

    <script>
 
function onFileSelected(self) {
    var videos = document.getElementById("videos");
 
    for (var a = 0; a < self.files.length; a++) {
        var file = self.files[a];
        var fileReader = new FileReader();
 
        fileReader.onload = function (event) {
            var src = event.target.result;
            var newVideo = document.createElement("video");
 
            newVideo.setAttribute("src", src);
            newVideo.setAttribute("controls", "controls");
            newVideo.setAttribute("width", 500);
 
            videos.appendChild(newVideo);
        };
 
        fileReader.readAsDataURL(file);
    }
}
 
</script>
</div>
