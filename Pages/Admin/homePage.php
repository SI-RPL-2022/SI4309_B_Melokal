<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/homePage.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/logo.png" type="image/icon type">
    <title>Event-Ku</title>
</head>
<body>
    <!-- navbar -->
    <section class="navigation">
        <nav class="header navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a style="color: white;" class="brand navbar-brand" href="../index.html">Event-Ku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                </ul>
                <div class="d-flex ">
                  <a style="color: white;" href="Profile/accountUser.html" class="navbar-brand">
                      Your Name Here
                      <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Images/Tubes/Ellipse%2016.png" alt="" srcset="" width="50px">
                  </a>
                </div>
              </div>
            </div>
          </nav>
    </section>

    <!-- content -->
    <section>
        <div class="box">
            <div class="row" style="height: auto">
                <div class="col-3">
                    <div class="row bg-new">
                        <h5>Filter</h5>
                    </div>
                    <div class="row">
                        <form>
                            <div class="mb-3 my-2">
                              <label for="exampleInputEmail1" class="form-label" style="font-weight: 500; font-size: 16px;">Categories</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Education">
                                <label class="form-check-label" for="kategori" style="font-size: 14px;">
                                  Education
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Health">
                                <label class="form-check-label" for="kategori" style="font-size: 14px;">
                                  Health
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Finance">
                                <label class="form-check-label" for="kategori" style="font-size: 14px;">
                                  Finance
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Leadership">
                                <label class="form-check-label" for="kategori" style="font-size: 14px;">
                                  Leadership
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Others">
                                <label class="form-check-label" for="kategori" style="font-size: 14px;">
                                    Others
                                </label>
                              </div>
                            </div>

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label" style="font-weight: 500; font-size: 16px;">Location</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="lokasi" id="lokasi" value="Offline">
                                <label class="form-check-label" for="lokasi" style="font-size: 14px;">
                                    Offline
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="lokasi" id="lokasi" value="Online">
                                <label class="form-check-label" for="lokasi" style="font-size: 14px;">
                                  Online
                                </label>
                              </div>
                            </div>
                            
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label" style="font-weight: 500; font-size: 16px;">Price</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="harga" id="harga" value="Paid">
                                <label class="form-check-label" for="harga" style="font-size: 14px;">
                                  Paid
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="harga" id="harga" value="Free">
                                <label class="form-check-label" for="harga" style="font-size: 14px;">
                                  Free
                                </label>
                              </div>
                            </div>
                            <div class="text-center">
                                <button style="width: 49%;" type="submit" class="btn btn-primary my-3">Filter</button>
                                <button style="width: 49%;" type="reset"  class="btn btn-danger my-3">Cancel</button>
                            </div>
                          </form>
                    </div>
                </div>

                <div class="col-9">
                    <div class="row">
                        <div class="col my-2 mx-2" style="max-width: 276px;">
                            <div class="card" style="
                            width: 266px;
                            max-width: 266px;
                            height: 380px;
                            max-height: 380px;
                            background: #FFFFFF;
                            box-shadow: 0px 0px 20px rgba(100, 100, 100, 0.15);
                            border-radius: 10px;
                            ">
                              <img src="https://www.vibesofindia.com/wp-content/uploads/2021/09/covid-19-vaccination-1500-991-2.jpg" class="card-img-top" alt="..." style="
                              height: 266px;
                              width: 266px;
                              max-width: 266px;
                              ">
                              <div class="card-body" style="padding-bottom: 0%">
                                <h5 class="card-title">Suntik Masal</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Monday 7 am</h6>
                              </div>
                              <div class="card-body">
                                <a class="btn btn-primary" style="width: 100%" href="Profile/detailEventUser.html" role="button">Details</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section style="bottom: 0;width: 100%; margin-top: 100px;">
      <footer style="background-color: #407BFF;" class="navbar">
          <div class="mx-auto">
            <p style="margin: 10px;">
              Copyright ©2021 Event-Ku
            </p>
          </div>
      </footer>
  </section>


</body>
</html>