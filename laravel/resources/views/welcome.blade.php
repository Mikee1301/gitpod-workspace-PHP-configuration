<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h2>Users Contact</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">FIRSTNAME</th>
                <th scope="col">LASTNAME</th>
                </tr>
            </thead>
            <tbody id="contactTable">
            </tbody>
        </table>
        <div class="buttons">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">User Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                <input type="text" class="form-control mb-2" placeholder="Firstname">
                <input type="text" class="form-control mb-2" placeholder="Lastname">
                <input type="email" class="form-control mb-2" placeholder="Email">
                <div class="row mb-2">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Age">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Salary">
                    </div>
                </div>
                    <input type="Address" class="form-control mb-2" placeholder="Address">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div> -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
      const contactTable = document.querySelector("#contactTable")
  
      async function getData(url = '') {
        let response = await fetch(url);
        let data = await response.json();
        let record = ''
        data.forEach((element) => {
            const rowElement = document.createElement('tr');
             record += "<tr>";
             record += "<td>" + element.id + "<td>";
             record += "<td>" + element.firstName + "<td>";
             record += "<td>" + element.lastName + "<td>";
        });
        contactTable.innerHTML = record;
      }
    getData('https://8000-mikee1301-gitpodworkspac-acq91b1if8r.ws-us34.gitpod.io/api/contact');
  </script>
</html>