<template>
  <!-- <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> -->
<!--Replace with your tailwind.css once created-->

<!--Regular Datatables CSS-->
<!-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<!--Responsive Extension Datatables CSS-->
<!-- <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet"> -->


  <div class="app-root">

    <!--Container-->
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

    <!--Title-->
    <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
      <slot></slot>
    </h1>

    <!--Card-->
     <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


      <table refs="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
          <tr>
            <th data-priority="1">Name</th>
            <th data-priority="2">Position</th>
            <th data-priority="3">Office</th>
            <th data-priority="4">Age</th>
            <th data-priority="5">Start date</th>
            <th data-priority="6">Salary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
          </tr>

          <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

          <tr>
            <td>Donna Snider</td>
            <td>Customer Support</td>
            <td>New York</td>
            <td>27</td>
            <td>2011/01/25</td>
            <td>$112,000</td>
          </tr>
        </tbody>

      </table>

    </div>
    <!--/Card-->

    </div>
    <!--/container-->
  </div>
  <!-- jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->

  <!--Datatables -->
  <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
  <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->

</template>

<script>
// import 'tailwindcss/dist/base.min.css';
// import 'tailwindcss/dist/components.min.css';
// import 'tailwindcss/dist/utilities.min.css';

import 'tailwindcss/dist/tailwind.min.css';

import 'datatables.net-dt/css/jquery.dataTables.min.css';
// import 'datatables.net-responsive-dt/css/responsive.dataTables.min.css';

//for javascript scripts
var $  = require( 'jquery' );
//adding this line breaks everything!!!!
//////////////////////////////////////////
// var dt = require( 'datatables.net' )(window. $);
//////////////////////////////////////////

// require( 'datatables.net-responsive-dt' )( window, $ );

// require( 'jquery' );
// require( 'datatables.net' )();

  export default {

    data() {

        return {dataTable: null};
    },

      mounted() {
          console.log('Datatable component mounted.');

          this.dataTable = this.$refs;
          // this.dataTable = this.$refs.DataTable({});
          // this.dataTable = this.$refs.DataTable({});
          // this.dataTable = $('#example').DataTable({});
            //
            // var table = this.$refs.DataTable( {
            //     responsive: true
            //   } )
            //   .columns.adjust()
            //   .responsive.recalc();

          // $(document).ready(function() {
          //
          //   var table = $('#example').DataTable( {
          //       responsive: true
          //     } )
          //     .columns.adjust()
          //     .responsive.recalc();
          // } );
      }
  }
</script>

<style>

  /*Overrides for Tailwind CSS */

  /*Form fields*/
  .dataTables_wrapper select,
  .dataTables_wrapper .dataTables_filter input {
    color: #4a5568; 			/*text-gray-700*/
    padding-left: 1rem; 		/*pl-4*/
    padding-right: 1rem; 		/*pl-4*/
    padding-top: .5rem; 		/*pl-2*/
    padding-bottom: .5rem; 		/*pl-2*/
    line-height: 1.25; 			/*leading-tight*/
    border-width: 2px; 			/*border-2*/
    border-radius: .25rem;
    border-color: #edf2f7; 		/*border-gray-200*/
    background-color: #edf2f7; 	/*bg-gray-200*/
  }

  /*Row Hover*/
  table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
    background-color: #ebf4ff;	/*bg-indigo-100*/
  }

  /*Pagination Buttons*/
  .dataTables_wrapper .dataTables_paginate .paginate_button		{
    font-weight: 700;				/*font-bold*/
    border-radius: .25rem;			/*rounded*/
    border: 1px solid transparent;	/*border border-transparent*/
  }

  /*Pagination Buttons - Current selected */
  .dataTables_wrapper .dataTables_paginate .paginate_button.current	{
    color: #fff !important;				/*text-white*/
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06); 	/*shadow*/
    font-weight: 700;					/*font-bold*/
    border-radius: .25rem;				/*rounded*/
    background: #667eea !important;		/*bg-indigo-500*/
    border: 1px solid transparent;		/*border border-transparent*/
  }

  /*Pagination Buttons - Hover */
  .dataTables_wrapper .dataTables_paginate .paginate_button:hover		{
    color: #fff !important;				/*text-white*/
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);	 /*shadow*/
    font-weight: 700;					/*font-bold*/
    border-radius: .25rem;				/*rounded*/
    background: #667eea !important;		/*bg-indigo-500*/
    border: 1px solid transparent;		/*border border-transparent*/
  }

  /*Add padding to bottom border */
  table.dataTable.no-footer {
    border-bottom: 1px solid #e2e8f0;	/*border-b-1 border-gray-300*/
    margin-top: 0.75em;
    margin-bottom: 0.75em;
  }

  /*Change colour of responsive icon*/
  table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
    background-color: #667eea !important; /*bg-indigo-500*/
  }

</style>
