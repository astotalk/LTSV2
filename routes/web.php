<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Company;
use App\Http\Controllers\HR;
use App\Http\Controllers\Complaint;
use App\Http\Controllers\CallManagement;
use App\Http\Controllers\ProductManagament;
use App\Http\Controllers\ClientMangament;
use App\Http\Controllers\ServiceManagement;
use App\Http\Controllers\InventoryManagament;
use App\Http\Controllers\Billmanagement;
use App\Http\Controllers\Expense;
use App\Http\Controllers\DeliveryCallan;
use App\Http\Controllers\Registration;
use App\Http\Controllers\RTO;
use App\Http\Controllers\Register;
use App\Http\Controllers\Profile;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Login\{
    LoginController,
    ProfileController,
    LogoutController,
};
 use App\Http\Controllers\Company\{
        CompanyController,
        DepartmentController,
        DesigantionController
    };

    use App\Http\Controllers\HR\{
        EmpolyeeController,
        HolidayController,
        LeaveController
    };
    use App\Http\Controllers\Complaint\{
        ComplaintController,
        CustomersearchController,
        AddcomplaintController,
        UploadfileController         
    };
    use App\Http\Controllers\CallManagement\{
        addrescalationController,
        ClosedreportController,
        RegistaionreportController,    
        PendingcallsController,
        searchcomplaintController,
        pendingcallreportController,   
    };
        use App\Http\Controllers\ProductManagament\{
        CategoryController,
        ProductController,
        SubCategoryController,
    };

    use App\Http\Controllers\ClientMangament\{
        AddbrandController,
        AddclientController,
        ClientlistController,
        AddproducttypeController,
        ProductTypelistController,
        ModellistController,
        BrandlistController,
        AddmodelController 
    };
    use App\Http\Controllers\ServiceManagement\{
        AddservicenterController,
        AddservicelistController,
        AddservicenterpriceController,
        AddservicenterpricelistController,
        ServicenterlinkcityController
    };
    use App\Http\Controllers\InventoryManagament\{
            AddpartController,
            StorkListController,
            PartlistController,
            StockentrylistController,
            PartsMappingListController,
            PartsMappingController,
            StorEntryController
        
    };
  use  App\Http\Controllers\Billmanagement\{
            SFBillController,
            InvoiceController,
            SfbillreportController,
    };

    use App\Http\Controllers\Expense\{
                ExpenseController,
                ExpenseHistoryController,
    };
    use  App\Http\Controllers\DeliveryCallan\{
                DeliveryCallanController,
                DeliveryCallanListController,
                ChallanreportListController,
                deliverychallanController
    };

    use  App\Http\Controllers\Registration\{
        RegistrationController,
    };

    use    App\Http\Controllers\RTO\{
        RTOController,
        RtoreportController
    };
    
   use  App\Http\Controllers\Register\{
        RegisterController
    };
    use  App\Http\Controllers\Profile\{
        ProfileEmpController
    };

    
Route::get('/', function () {
    return view('welcome');
});
///////////////////////////////Login///////////////////////////////

    Route ::group(['meddleware'=>'/LTS/login'], function(){  
    Route::get('/', [LoginController::class,'getlogin'])->name('getlogin');
    Route::get('/LTS/login', [LoginController::class,'getlogin'])->name('getlogin');
    Route::post('/LTS/login', [LoginController::class,'postlogin'])->name('postlogin');
    Route::get('/LTS/dashboard', [ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/LTS/logout', [ProfileController::class,'logout'])->name('logout');

///////////////////////////////Company///////////////////////////////

    Route::get ('/company/company', [CompanyController::class,'company'])->name('company');
    Route::post('/company/companystore', [CompanyController::class, 'companystore'])->name('companystore'); 
    Route::get('/company/edit/{id}', [CompanyController::class,'edit'])->name('edit');
    Route::put('/company/update/', [CompanyController::class,'update'])->name('update');
    Route::get('/company/destroy/{id}', [CompanyController::class,'destroy'])->name('destroy');

///////////////////////////////Department///////////////////////////////

    Route::get('/company/department', [DepartmentController::class,'department'])->name('department');
    Route::POST('/department/store', [DepartmentController::class,'store'])->name('store');
    Route::get('/department/edit/{id}', [DepartmentController::class,'edit'])->name('edit');
    Route::put('/department/update/', [DepartmentController::class,'update'])->name('update');
    Route::POST('/department/destroy/', [DepartmentController::class,'destroy'])->name('destroy');

///////////////////////////////Designation///////////////////////////////

    Route::get('/company/designation', [DesigantionController::class,'designation'])->name('designation');
    Route::POST('/designation/addstoress', [DesigantionController::class,'addstoress'])->name('addstoress');
    Route::get('/designation/edit/{id}', [DesigantionController::class,'edit']);
    Route::put('/designation/update/', [DesigantionController::class,'update'])->name('update');
    Route::POST('/designation/destroy/', [DesigantionController::class,'destroy'])->name('destroy');

///////////////////////////////Employee///////////////////////////////

    Route::get('/hr/employee', [EmpolyeeController::class,'employee'])->name('employee');
    Route::post('/employee/empstore', [EmpolyeeController::class, 'empstore'])->name('empstore'); 
    Route::POST('/employee/destroy/', [EmpolyeeController::class,'destroy'])->name('destroy');
    Route::put('/employee/update/', [EmpolyeeController::class,'update'])->name('update');
    Route::get('/employee/edit/{id}', [EmpolyeeController::class,'edit']);
    Route::get('/getStates/{country_id}', [EmpolyeeController::class,'getStates']);
    Route::get('/getCities/{state_id}', [EmpolyeeController::class,'getCities']);

///////////////////////////////Holiday///////////////////////////////

    Route::get('/hr/holiday', [HolidayController::class,'holiday'])->name('holiday');
    Route::POST('/holiday/holystore', [HolidayController::class,'holystore'])->name('holystore');
    Route::put('/holiday/update/', [HolidayController::class,'update'])->name('update');
    Route::get('/holiday/edit/{id}', [HolidayController::class,'edit']);
    Route::POST('/holiday/destroy/', [HolidayController::class,'destroy'])->name('destroy');

///////////////////////////////Leave///////////////////////////////

    Route::get('/hr/leave', [LeaveController::class,'leavelts'])->name('leavelts');
    Route::post('/leave/leavestore', [LeaveController::class, 'leavestore'])->name('leavestore'); 
    Route::put('/leave/update/', [LeaveController::class,'update'])->name('update');
    Route::get('/leave/departmenchangeEmp/{id}', [LeaveController::class,'departmenchangeEmp'])->name('departmenchangeEmp');
    Route::get('/leave/edit/{id}', [LeaveController::class,'edit']);
    Route::POST('/leave/destroy/', [LeaveController::class,'destroy'])->name('destroy');

///////////////////////////////Call Center Management/////////////////////////////// 

    Route::get('/CallCenterManagement/complaintsearch', [ComplaintController::class,'complaintsearch'])->name('complaintsearch');
    Route::post('/complaintsearch/compstore', [ComplaintController::class, 'compstore'])->name('compstore'); 
    Route::put('/complaintsearch/update/', [ComplaintController::class,'update'])->name('update');
    Route::get('/complaintsearch/edit/{id}', [ComplaintController::class,'edit']);
    Route::get('/CallCenterManagement/addcomplaint', [AddcomplaintController::class,'addnewcomplaint'])->name('addnewcomplaint');
    Route::get('/addcomplaint/pincodesearchcompalaint/{pin}', [AddcomplaintController::class,'pincodesearchcompalaint'])->name('pincodesearchcompalaint');
    Route::get('/addcomplaint/addchangebrand/{id}', [AddcomplaintController::class,'addchangebrand'])->name('addchangebrand');
    Route::post('/addcomplaint/addstore', [AddcomplaintController::class, 'addstore'])->name('addstore'); 
    Route::get('/CallCenterManagement/uploadcomplaint', [UploadfileController::class,'uploadcomplaint'])->name('uploadcomplaint');

    ///////////////////////////////Complaint Management///////////////////////////////

    Route::get('/complaintmanagement/pendingcalls', [PendingcallsController::class,'pendingcalls'])->name('pendingcalls');
    Route::put('/pendingcalls/update/', [PendingcallsController::class,'update'])->name('update');
    Route::get('/pendingcalls/pincodesearch/{pin}', [PendingcallsController::class,'pincodesearch'])->name('pincodesearch');
    Route::get('/pendingcalls/edit/{id}', [PendingcallsController::class,'edit']);
    Route::get('/pendingcalls/show/{id}', [PendingcallsController::class,'show']);
    Route::get('/complaintmanagement/pendingcallreport', [pendingcallreportController::class,'pendingcallreport'])->name('pendingcallreport');
    Route::get('/complaintmanagement/registrationreport', [RegistaionreportController::class,'registrationreport'])->name('registrationreport');
    
    //Route::post('/registrationreport/searchmonthdata/', [RegistaionreportController::class,'searchmonthdata'])->name('searchmonthdata');

    Route::get('/registrationreport/edit/{id}', [RegistaionreportController::class,'edit']);
    Route::get('/registrationreport/show/{cmp_id}', [RegistaionreportController::class,'show']);
    Route::put('/registrationreport/update/', [RegistaionreportController::class,'update'])->name('update');
    Route::get('/complaintmanagement/addescalation', [addrescalationController::class,'addescalation'])->name('addescalation');
    Route::post('/addescalation/FetchSearchData/{id}', [addrescalationController::class,'FetchSearchData'])->name('FetchSearchData');
    Route::get('/complaintmanagement/searchcomplaint', [searchcomplaintController::class,'searchcomplaint'])->name('searchcomplaint'); 
    Route::get('/complaintmanagement/closedreport', [ClosedreportController::class,'closedreport'])->name('closedreport');
    Route::post('/closedreport/getdata/', [ClosedreportController::class,'getdata'])->name('getdata');
    Route::get('/closedreport/edit/{id}', [ClosedreportController::class,'edit'])->name('edit');
    Route::put('/closedreport/update/', [ClosedreportController::class,'update'])->name('update');
    Route::get('/closedreport/view/{id}', [ClosedreportController::class,'view'])->name('view');
    Route::get('/closedreport/jobcard/{id}', [ClosedreportController::class,'jobcard'])->name('jobcard');
    Route::put('/closedreport/jobcardupdate/', [ClosedreportController::class,'jobcardup date'])->name('jobcardupdate');
    Route::POST('/closedreport/FetchJobStatus/', [ClosedreportController::class,'FetchJobStatus'])->name('FetchJobStatus');
    Route::POST('/closedreport/PartPending/', [ClosedreportController::class,'PartPending'])->name('PartPending');
    Route::post('/closedreport/visitdonestore', [ClosedreportController::class,'visitdonestore'])->name('visitdonestore');

    ///////////////////////////////ProductMangament///////////////////////////////

    Route::get('/ProductMangament/product', [ProductController::class,'product'])->name('product');
    Route::post('/product/productstore', [ProductController::class,'productstore'])->name('productstore');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('edit');
    Route::put('/product/update/', [ProductController::class,'update'])->name('update');    
    Route::get('/product/destroy/{id}', [ProductController::class,'destroy'])->name('destroy');
    Route::get('/product/show/{id}', [ProductController::class,'show'])->name('show');
    Route::get('/product/status_update/{id}', [ProductController::class,'status_update'])->name('status_update');
    Route::get('/product/categorychangedata/{id}', [ProductController::class,'categorychangedata'])->name('categorychangedata');

    // Route::get('/product/subcategorychange/{id}', [ProductController::class,'subcategorychange'])->name('subcategorychange');

    ///////////////////////////////subcategory///////////////////////////////

    Route::get('/ProductMangament/subcategory', [SubCategoryController::class,'subcategory'])->name('subcategory');
    Route::post('/subcategory/aadsubcategory', [SubCategoryController::class,'aadsubcategory'])->name('aadsubcategory');
    Route::POST('/subcategory/destroy/', [SubCategoryController::class,'destroy'])->name('destroy');
    Route::get('/subcategory/edit/{id}', [SubCategoryController::class,'edit'])->name('edit');
    Route::put('/subcategory/update/{complaint_id}', [SubCategoryController::class,'update'])->name('update');

    ///////////////////////////////category///////////////////////////////

    Route::get('/ProductMangament/category', [CategoryController::class,'category'])->name('category');
    Route::post('/category/addcategory', [CategoryController::class,'addcategory'])->name('addcategory');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('edit');
    Route::put('/category/update/', [CategoryController::class,'update'])->name('update');
    Route::POST('/category/destroy/', [CategoryController::class,'destroy'])->name('destroy');

    ///////////////////////////////Client.Mangament///////////////////////////////

    Route::get('/Clientmanagament/addclient', [AddclientController::class,'addclient'])->name('addclient');
    Route::post('/addclient/addclinetstore', [AddclientController::class,'addclinetstore'])->name('addclinetstore');
    Route::get('/Clientmanagament/clientlist', [ClientlistController::class,'clientlist'])->name('clientlist');
    Route::get('/clientlist/clientlist', [ClientlistController::class,'clientlist'])->name('clientlist');
    Route::put('/clientlist/update/', [ClientlistController::class,'update'])->name('update');
    Route::get('/clientlist/edit/{id}', [ClientlistController::class,'edit'])->name('edit');
    Route::get('/clientlist/view/{id}', [ClientlistController::class,'view'])->name('view');
    Route::get('/Clientmanagament/Addproducttype', [AddproducttypeController::class,'Addproducttype'])->name('Addproducttype');
    Route::post('/Addproducttype/productadd', [AddproducttypeController::class,'productadd'])->name('productadd');
    Route::get('/Addproducttype/show/{id}', [AddproducttypeController::class,'show'])->name('show');
    Route::put('/Addproducttype/update/', [AddproducttypeController::class,'update'])->name('update');
    Route::get('/Addproducttype/edit/{id}', [AddproducttypeController::class,'edit'])->name('edit');
    Route::get('/Clientmanagament/Producttypelist', [ProductTypelistController::class,'Producttypelist'])->name('Producttypelist');
    Route::get('/Clientmanagament/Addbrand', [AddbrandController::class,'Addbrand'])->name('Addbrand');
    Route::post('/Addbrand/addbrandstore', [AddbrandController::class,'addbrandstore'])->name('addbrandstore');
    Route::get('/Clientmanagament/Modallist', [ModellistController::class,'Modallist'])->name('Modallist');
    Route::get('/Clientmanagament/Brandlist', [BrandlistController::class,'Brandlist'])->name('Brandlist');
    Route::get('/Clientmanagament/Addmodal', [AddmodelController::class,'Addmodal'])->name('Addmodal');
    Route::post('/Addmodal/addmodelstore', [AddmodelController::class,'addmodelstore'])->name('addmodelstore');
    Route::get('/Addmodal/clientchangebrand/{id}', [AddmodelController::class,'clientchangebrand'])->name('clientchangebrand');

    ///////////////////////////////ServiceManagement.Management///////////////////////////////

    Route::get('/ServiceManagement/Addservicecenter', [AddservicenterController::class,'Addservicecenter'])->name('Addservicecenter');
    Route::post('/Addservicecenter/servicestore', [AddservicenterController::class,'servicestore'])->name('servicestore');
    Route::get('/Addservicecenter/pincodesearchid/{pin}', [AddservicenterController::class,'pincodesearchid'])->name('pincodesearchid');
    Route::get('/ServiceManagement/Servicenterlist', [AddservicelistController::class,'Servicenterlist'])->name('Servicenterlist');
    Route::get('/Servicenterlist/pincodesearch/{pin}', [AddservicelistController::class,'pincodesearch'])->name('pincodesearch');
    Route::get('/ServiceManagement/Servicenterlist', [AddservicelistController::class,'Servicenterlist'])->name('Servicenterlist');
    Route::put('/Servicenterlist/update/', [AddservicelistController::class,'update'])->name('update');
    Route::get('/Servicenterlist/edit/{id}', [AddservicelistController::class,'edit'])->name('edit');
    Route::get('/Servicenterlist/show/{id}', [AddservicelistController::class,'show'])->name('show');
    Route::get('/ServiceManagement/Addservicecenterpricelist', [AddservicenterpriceController::class,'Addservicecenterpricelist'])->name('Addservicecenterpricelist');
    Route::post('/Addservicecenterpricelist/addpricestore', [AddservicenterpriceController::class,'addpricestore'])->name('addpricestore');
    Route::get('/ServiceManagement/Servicecenterpricelist', [AddservicenterpricelistController::class,'Servicecenterpricelist'])->name('Servicecenterpricelist');
    Route::get('/ServiceManagement/Servicecenterlinkcity', [ServicenterlinkcityController::class,'Servicecenterlinkcity'])->name('Servicecenterlinkcity');
    Route::post('/Servicecenterlinkcity/addlinkstore', [ServicenterlinkcityController::class,'addlinkstore'])->name('addlinkstore');
    Route::get('/Servicecenterlinkcity/pincodesearch/{pin}', [ServicenterlinkcityController::class,'pincodesearch'])->name('pincodesearch');
    Route::put('/Servicecenterlinkcity/update/', [ServicenterlinkcityController::class,'update'])->name('update');
    Route::get('/Servicecenterlinkcity/edit/{id}', [ServicenterlinkcityController::class,'edit'])->name('edit'); 

    ///////////////////////////////Invertory Management///////////////////////////////

    Route::get('/InventoryMangament/Addpart', [AddpartController::class,'Addpart'])->name('Addpart');
    Route::post('/Addpart/addpartstore', [AddpartController::class,'addpartstore'])->name('addpartstore');
    Route::get('/InventoryMangament/Partslist', [PartlistController::class,'Partslist'])->name('Partslist');
    Route::put('/Partslist/update/', [PartlistController::class,'update'])->name('update');
    Route::get('/Partslist/edit/{id}', [PartlistController::class,'edit'])->name('edit');
    Route::get('/InventoryMangament/Stocklist', [StorkListController::class,'Stocklist'])->name('Stocklist');
    Route::get('/InventoryMangament/Stockentrylist', [StockentrylistController::class,'Stockentrylist'])->name('Stockentrylist');
    Route::get('/InventoryMangament/partsmapping', [PartsMappingController::class,'partsmapping'])->name('partsmapping');
    Route::get('/InventoryMangament/partsmappinglist', [PartsMappingListController::class,'partsmappinglist'])->name('partsmappinglist');
    Route::get('/InventoryMangament/stockentry', [StorEntryController::class,'stockentry'])->name('stockentry');
    Route::post('/InventoryMangament/stockentryaddstore', [StorEntryController::class,'stockentryaddstore'])->name('stockentryaddstore');

    //////////////////////////////BillManagemnt///////////////////////////////////////

    Route::get('/BillManagemnt/Sfbillreport', [SFBillController::class,'Sfbillreport'])->name('Sfbillreport');
    Route::post('/Sfbillreport/getdatareport/', [SFBillController::class,'getdatareport'])->name('getdatareport');
    Route::get('/BillManagemnt/Invoicebill/', [InvoiceController::class,'Invoicebill'])->name('Invoicebill');
    Route::get('/Invoicebill/FetchSearch/', [InvoiceController::class,'FetchSearch'])->name('FetchSearch');
    Route::get('/BillManagemnt/Sfbill/', [SfbillreportController::class,'Sfbill'])->name('Sfbill');
    Route::get('/Sfbill/showinvoice/{id}', [SfbillreportController::class,'showinvoice'])->name('showinvoice');

    //////////////////////////////ExpesceController///////////////////////////////////////

    Route::get('/Expense/Addexpense/', [ExpenseController::class,'addexpense'])->name('addexpense');
    Route::post('/Addexpense/addexpescestore/', [ExpenseController::class,'addexpescestore'])->name('addexpescestore');
    Route::get('/Expense/expensehistory/', [ExpenseHistoryController::class,'expensehistory'])->name('expensehistory');
    Route::post('/expensehistory/getdatasearchdd/', [ExpenseHistoryController::class,'getdatasearchdd'])->name('getdatasearchdd');

    //////////////////////////////Delivery Callan ///////////////////////////////////////

    Route::get('/DeliveryCallan/Addcallan/', [DeliveryCallanController::class,'Addcallan'])->name('Addcallan');
    Route::post('/Addcallan/addcallanstore/', [DeliveryCallanController::class,'addcallanstore'])->name('addcallanstore');
    Route::get('/DeliveryCallan/listcallan/', [DeliveryCallanListController::class,'listcallan'])->name('listcallan');
    Route::post('/listcallan/getdatareportsearch/', [DeliveryCallanListController::class,'getdatareportsearch'])->name('getdatareportsearch');
    Route::get('/listcallan/show/{id}', [DeliveryCallanListController::class,'show'])->name('show');
    Route::get('/DeliveryCallan/Challanreport/', [ChallanreportListController::class,'Challanreport'])->name('Challanreport');
    Route::post('/Challanreport/getdatasearch/', [ChallanreportListController::class,'getdatasearch'])->name('getdatasearch');
    Route::get('/Challanreport/view/{id}', [ChallanreportListController::class,'view'])->name('view');
    Route::get('/DeliveryCallan/deliverychallan/', [deliverychallanController::class,'deliverychallan'])->name('deliverychallan');
    
    //////////////////////////////RTO Callan ///////////////////////////////////////

   Route::get('/RTO/addrto/', [RTOController::class,'addrto'])->name('addrto');   
   Route::get('/RTO/rtoreport/', [RtoreportController::class,'rtoreport'])->name('rtoreport');   
   Route::post('/RTO/GetRtoDetail/', [RTOController::class,'GetRtoDetail'])->name('rtoGetRtoDetailreport');   

//    Route::get('./RegisterUser/register', 'Api\RegisterController@register');    
   Route::get('/RegisterUser/register', [RegisterController::class,'register'])->name('register');
   Route::POST('/register/registerstore', [RegisterController::class,'registerstore'])->name('registerstore');
   Route::get('/register/edit/{id}', [RegisterController::class,'edit'])->name('edit');
   Route::put('/register/update/', [RegisterController::class,'update'])->name('update');
   Route::POST('/register/destroy/', [RegisterController::class,'destroy'])->name('destroy');

  Route::get('/RegisterUser/registerjoinemp/', [RegisterController::class,'registerjoinemp'])->name('registerjoinemp');

  Route::get('/Profile/profile_crm', [ProfileEmpController::class,'profile_crm'])->name('profile_crm');

  

 
});









