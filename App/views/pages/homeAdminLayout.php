<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Bài viết</h1>
              <!-- </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Bài viết</li>
              </ol>
            </div> -->
            </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- <div class="card-header">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Thể loại</th>
                        <th>Image</th>
                        <th>Người thêm</th>
                        <th>Ngày thêm</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (isset($data['BlogList'])) : ?>
                        <?php foreach ($data['BlogList'] as $Blog) : ?>
                          <td><?= $Blog['id'] ?></td>
                          <td><?= $Blog['title'] ?></td>
                          <td><?= $Blog['content'] ?></td>
                          <td><?= $Blog['name'] ?></td>
                          <td><?= $Blog['image'] ?></td>
                          <td><?= $Blog['user_name'] ?></td>
                          <td><?= $Blog['created_at'] ?></td>
                    </tbody>
                  <?php endforeach ?>
                <?php endif ?>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->

          <!-- /.row -->

          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->