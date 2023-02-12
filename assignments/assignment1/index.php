


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <title>Assignment 1</title>
</head>
<body>
<div class='container'>
    <form method='post' action='index.php'>
        <div class="row mt-3">
            <div class="col-sm-6">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstNameInput" name='firstName' >
            </div>
            <div class="col-sm-6">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastNameInput" name='lastName' />
            </div>
        </div>
        <div class='row mt-2'>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control" id="addressInput" name='address' />
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-sm-6">
                <label for="exampleFormControlInput1" class="form-label">City</label>
                <input type="text" class="form-control" id="cityInput" name='city' >
            </div>
            <div class="col-sm-4">
                <label for="exampleFormControlInput1" class="form-label">State</label>
                <select class="form-select" id="exampleFormControlSelect1" name="state" >
                    <option value='Texas'>Texas</option>
                    <option value='California'>California</option>
                    <option value='Michigan' selected>Michigan</option>
                    <option value='Ohio'>Ohio</option>
                    <option value='Illinois'>Illinois</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label for="exampleFormControlInput1" class="form-label">Zip Code</label>
                <input type="number" class="form-control" id="zipInput" name='zip'>
            </div>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleRadio" value="male">
            <label class="form-check-label" for="maleRadio">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleRadio" value="female">
            <label class="form-check-label" for="femaleRadio">Female</label>
        </div>
        <div class='mt-2'>
            <input class="btn btn-primary" type="submit" value="Register">
        </div>
    </form>
</div>
</body>
</html>