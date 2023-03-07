require('./bootstrap');
require('sweetalert2');
require('select2');
import 'bootstrap';
import $ from 'jquery';
require('select2');
$('#select').select2();
import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive'
let table = new DataTable('#myTable', {
    responsive: true
});