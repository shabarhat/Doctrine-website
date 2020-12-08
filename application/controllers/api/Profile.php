<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Profile extends CI_Controller {
//     public function profile()
//     {

//     }
// }

require APPPATH.'libraries/REST_Controller.php';

class Profile  extends  REST_Controller{
    /*
      INSERT POST REQUEST TYPE
      UPDATE PUT REQUEST TYPE
      DELETE POST DELETE TYPE
      FETCH POST GET TYPE
    */

    // POST: <project_url>/index.php/api/Profile
        public function index_post()
            {
                //insert data method
                echo "This is post method to insert data";
            }

    // PUT: <project_url>/index.php/api/Profile
        public function index_put()
        {
            //update data method
            echo "This is put method to update data";
        }

    // DELETE: <project_url>/index.php/api/Profile
        public function index_delete()
            {
                //delete data method
                echo "This is delete method to delete data";
            }

    // GET: <project_url>/index.php/api/Profile
        public function index_get()
        {
            //fetch data method
            echo "This is get method to fetch data";
        }

}
?>