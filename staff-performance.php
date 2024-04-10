<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/staff-header-link.php' ?>
</head>
<style>
    [v-cloak] {
        display: none;
    }
</style>


<body id="staff" v-cloak class="with-welcome-text">
    <div class="container-scroller">
        <?php include 'includes/staff-header.php' ?>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <?php include 'includes/staff-sidebar.php' ?>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Perfomance and Review </h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Review By</th>
                                                    <th>Date</th>
                                                    <th>Reviews</th>
                                                    <th>Performance Status</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John Elton</td>
                                                    <td>May 15, 2015 </td>
                                                    <td>Change of Borad of Directors </td>
                                                    <td>
                                                        <div class="badge badge-opacity-warning me-3">Avarage</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>John Elton</td>
                                                    <td>May 15, 2015 </td>
                                                    <td>Change of Borad of Directors </td>
                                                    <td>
                                                        <div class="badge badge-opacity-success me-3">Good</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>John Elton</td>
                                                    <td>May 15, 2015 </td>
                                                    <td>Change of Borad of Directors </td>
                                                    <td>
                                                        <div class="badge badge-opacity-danger me-3">Bad</div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
        </div>
    </div>

    <?php include 'includes/staff-footer.php' ?>
</body>

</html>