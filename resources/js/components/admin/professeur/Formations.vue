<template>
  <div class="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <p>
        <span class="gauche"
          ><i class="fa fa-2x fa-plus-circle d-lg-show" aria-hidden="true"></i></span
        ><span class="gauche">
          <h1 class="h3 align left mb-2 text-gray-800">
            Formations 
          </h1></span
        >
      </p>
     
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table
              class="table table-bordered"
              id="dataTable"
              width="100%"
              cellspacing="0"
            >
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Scroll to Top Button-->
  </div>
</template>

<script>
export default {
  name: "Dashboard",
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style scoped>
p {
  text-align: justify;
}

p span.gauche {
  float: left;
}
 
</style>