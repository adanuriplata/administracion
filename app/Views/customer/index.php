<?= $this->extend('templates/admin_template'); ?>
<?= $this->Section('content') ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                <a href="<?=base_url('customers/create');?>" class="btn btn-success" type="button">Nuevo</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Empresa</th>
                    <th>Propietario</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($customer as $itemCustomer): ?>
                  <tr>
                    <td><?=$itemCustomer['company'];?></td>
                    <td><?=$itemCustomer['owner'];?></td>
                    <td><?=$itemCustomer['email'];?></td>
                    <td><?=$itemCustomer['phone'];?></td>
                    <td>
                        <a href="<?=base_url('customers/edit/'.$itemCustomer['id_customer']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('customers/delete/'.$itemCustomer['id_customer']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                  </tr>
            <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Empresa</th>
                    <th>Propietario</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endsection() ?>