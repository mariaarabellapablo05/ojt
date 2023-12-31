<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJTIMS</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="toptitle">OJTIMS</span>
                    </a>
                </li>

                <li>
                    <a href="welcome">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Account Information</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Students</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Advisers</span>
                    </a>
                </li>

                <li>
                    <a href="uploadpage">
                        <span class="icon">
                            <ion-icon name="document-outline"></ion-icon>
                        </span>
                        <span class="title">Upload Templates</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <!--<img src="assets/imgs/OJTIMSbg.png" alt="">-->

            <div class="topbar">

                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

            </div>

            <div class="dash">
                <h1 style="color:white">Upload Files</h1>
            </div>

          
            <form action="{{url('/uploadfile')}}" method="post" enctype="multipart/form-data">

                @csrf
        

        

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Upload Templates</h2>
                       
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Choose File</td>
                                <td>Submit</td>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="name">
                                </td>
                                <td>
                                    <input type="file" name="file">

                                </td>
                                <td>
                                    <input type="submit" style="background-color:#FFA800;border-radius: 12px;padding: 5px 10px;border-color : gold;color:white;">
                                </td>
                            </tr>

                                                       
                        </tbody>
                    </table>

                </form>


                </div>
                

            </div>



            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Uploaded Templates</h2>
                    </div>
                    


                    
                    <table>
                        <thead>
                            <tr>
                                <td>File Name</td>
                                <td></td>
                                <td>Date and Time Submitted</td>
                            </tr>
                        </thead>


                        @foreach($data as $data)


                        <tbody>
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->file}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                    <button style="background-color:#FFA800;border-radius: 12px;padding: 5px 10px;border-color : gold">
                                        <a href="{{url('/view',$data->id)}}" style="color:white;font-family: 'Poppins', sans-serif;text-decoration:none;">View</a>
                                    </button>
                                </td>
                                <td>
                                    <button style="background-color: red;border-radius: 12px;padding: 5px 10px;border-color : red">
                                        <a href="{{url('/download',$data->file)}}" style="color:white;font-family: 'Poppins', sans-serif;text-decoration:none;">Download</a>
                                    </button>

                                </td>
                            </tr>



        </div>


    </div>


                 @endforeach

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>










