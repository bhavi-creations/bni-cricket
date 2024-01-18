<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cricket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .formborder {
            border: 2px solid rgb(53, 47, 47);
            box-shadow: 2px 2px 4px 2px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(8px);
        }

        body {
            background-image: url('ck.jpeg'); /* Specify the path to your image */
            background-size: cover; /* Ensure the background image covers the entire body */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-attachment: fixed; /* Fixed background */
        }

    

      
    </style>
</head>

<body class="bg-light" >
    <div class="container d-flex justify-content-center align-items-center vh-80 ">
        <section>
            <!-- <div style="text-align: center;" class="mt-5 mb-5 col-sm-12">
                <h3 class="mt-5">Registration form</h3>
            </div> -->

            <form enctype="multipart/form-data" method="post" action="mail.php" class="formborder rounded p-4 pb-4 mb-5 mt-5" style="width: 100%; text-align: center;">
                <div class="container mb-3">
                <h3 class="">Registration form</h3>
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">

                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" id="Phone" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Team</label>
                    <select name="team" id="team" class="form-control">
                        <option value="Amigos">Amigos</option>
                        <option value="Dazzlers">Dazzlers</option>
                        <option value="Challengers">Challengers</option>
                        <option value="Falcons">Falcons</option>
                        <option value="Explorers">Explorers</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        <h5>Batting</h5>
                    </label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="batting[]" value="left_hand_batting">
                    <label class="form-check-label" for="leftHandBatting"><b>Left Hand</b></label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="batting[]" value="right_hand_batting">
                    <label class="form-check-label" for="rightHandBatting"><b>Right Hand</b></label>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        <h5>Bowling</h5>
                    </label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bowling[]" value="left_hand_bowling">
                    <label class="form-check-label" for="leftHandBowling"><b>Left Hand</b></label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bowling[]" value="right_hand_bowling">
                    <label class="form-check-label" for="rightHandBowling"><b>Right Hand</b></label>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        <h5>Wicket Keeper</h5>
                    </label>
                    <input type="checkbox" class="form-check-input" id="wicketKeeper" name="wicket_keeper[]" value="wicket_keeper">
                 
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        <h5>All Rounder</h5>
                    </label>
                    <input type="checkbox" class="form-check-input" id="allRounder"  name="all_rounder[]" value="all_rounder">
             
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="formFile" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </div>
</body>

</html>