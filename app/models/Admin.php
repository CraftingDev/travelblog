<?php

class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //////////////// INSERT FUNCTIONS //////////////////////////////////////////////

    public function saveNews($data) {
        $this->db->query('INSERT INTO pd_news (ns_title, ns_msg) VALUES (:nTitle, :nDesc)');

        $this->db->bind(':nTitle', $data['nTitle']);
        $this->db->bind(':nDesc', $data['nDesc']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function saveEmail($data) {
        $this->db->query('INSERT INTO email_list (email, em_hash) VALUES (:email, :hash)');

        $this->db->bind(':email', $data['email']);
        $this->db->bind(':hash', $data['hash']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function saveVideo($data) {
        $this->db->query('INSERT INTO pd_videos (vd_title, vd_desc, vd_embed, fk_vid_cat_id) VALUES (:vdTitle, :vdDesc, :vdEmbed, :vdCat)');

        $this->db->bind(':vdTitle', $data['vdTitle']);
        $this->db->bind(':vdDesc', $data['vdDesc']);
        $this->db->bind(':vdEmbed', $data['vdEmbed']);
        $this->db->bind(':vdCat', $data['vdCat']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function saveImage($data, $new_name) {
        $this->db->query('INSERT INTO pd_images (gl_title, gl_desc, gl_img, fk_cat_id) VALUES (:glTitle, :glDesc, :glImg, :glCat)');

        $this->db->bind(':glTitle', $data['glTitle']);
        $this->db->bind(':glDesc', $data['glDesc']);
        $this->db->bind(':glImg', $new_name);
        $this->db->bind(':glCat', $data['glCat']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function saveSlide($data, $new_name) {
        $this->db->query('INSERT INTO pd_slides (sl_title, sl_desc, sl_img, sl_data) VALUES (:slTitle, :slDesc, :slImg, :slData)');

        $this->db->bind(':slTitle', $data['slTitle']);
        $this->db->bind(':slDesc', $data['slDesc']);
        $this->db->bind(':slImg', $new_name);
        $this->db->bind(':slData', $data['slData']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    //////////////// UPDATE  FUNCTIONS //////////////////////////////////////////////

    public function updateNews($data){

        $this->db->query('UPDATE pd_news SET ns_title = :nsTitle, ns_msg = :nsMsg WHERE ns_id = :nsId');
        // Bind values
        $this->db->bind(':nsId', $data['nsId']);
        $this->db->bind(':nsTitle', $data['nsTitle']);
        $this->db->bind(':nsMsg', $data['nsMsg']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function updateSlide($data, $new_name){

        $this->db->query('UPDATE pd_slides SET sl_title = :slTitle, sl_desc = :slDesc. sl_img = :slImg, sl_data = :slData WHERE sl_id = :slId');
        // Bind values
        $this->db->bind(':slId', $data['slId']);
        $this->db->bind(':slTitle', $data['slTitle']);
        $this->db->bind(':slDesc', $data['slDesc']);
        $this->db->bind(':slData', $data['slData']);
        $this->db->bind(':slImg', $new_name);


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function updateSocials($data){

        $this->db->query('UPDATE pd_socials SET facebook_so = :scFacebook, twitter_so = :scTwitter, linkedin_so = :scLinkedin,
                               google_so = :scGoogle, youtube_so = :scYoutube, instagram_so = :scInstagram, quora_so = :scQuora WHERE so_id = :scId');
        // Bind values
        $this->db->bind(':scId', $data['scId']);
        $this->db->bind(':scFacebook', $data['scFacebook']);
        $this->db->bind(':scTwitter', $data['scTwitter']);
        $this->db->bind(':scLinkedin', $data['scLinkedin']);
        $this->db->bind(':scGoogle', $data['scGoogle']);
        $this->db->bind(':scYoutube', $data['scYoutube']);
        $this->db->bind(':scInstagram', $data['scInstagram']);
        $this->db->bind(':scQuora', $data['scQuora']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function updateSite($data, $new_name) {

        $this->db->query('UPDATE pd_site SET site_name = :site_name, site_welcome = :site_welcome,
                                                 site_desc = :site_desc, site_about = :site_about, site_keywords = :site_keywords, site_logo = :site_logo,
                                                 site_contact_name = :site_contact_name, site_contact_mail = :site_contact_mail, site_contact_add 
                                                 = :site_contact_add, site_contact_num = :site_contact_num, site_contact_info = :site_contact_info
                                                 WHERE site_id = :site_id');

        $this->db->bind(':site_id', $data['site_id']);
        $this->db->bind(':site_name', $data['site_name']);
        $this->db->bind(':site_welcome', $data['site_welcome']);
        $this->db->bind(':site_about', $data['site_about']);
        $this->db->bind(':site_desc', $data['site_desc']);
        $this->db->bind(':site_keywords', $data['site_keywords']);
        $this->db->bind(':site_logo', $new_name);
        $this->db->bind(':site_contact_name', $data['site_contact_name']);
        $this->db->bind(':site_contact_mail', $data['site_contact_mail']);
        $this->db->bind(':site_contact_add', $data['site_contact_add']);
        $this->db->bind(':site_contact_num', $data['site_contact_num']);
        $this->db->bind(':site_contact_info', $data['site_contact_info']);

        if($this->db->execute()) {
           return true;
        } else {
          return false;
        }

 }

    //////////////// GET FUNCTIONS //////////////////////////////////////////////

    public function getCities() {
        $this->db->query('SELECT * FROM cidades WHERE cidade_id = 4850');
        $row = $this->db->single();
        return $row;
    }

    public function getNewsById($id){
        $this->db->query('SELECT * FROM pd_news WHERE ns_id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function getAllNews(){
        $this->db->query('SELECT * FROM pd_news');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSocials(){
        $this->db->query('SELECT * FROM pd_socials');
        $row = $this->db->single();
        return $row;
    }

    public function getAllEmails(){
        $this->db->query('SELECT * FROM email_list');
        $result = $this->db->resultSet();
        return $result;
    }


    public function getAllImages(){
        $this->db->query('SELECT * FROM pd_images LEFT JOIN pd_galleries ON pd_galleries.gl_cat_id = pd_images.fk_cat_id
                               ORDER BY pd_images.gl_created DESC');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSlideById($id){
        $this->db->query('SELECT * FROM pd_slides WHERE sl_id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }


    public function getAllVideos(){
        $this->db->query('SELECT * FROM pd_videos
                               LEFT JOIN pd_vid_categories ON pd_vid_categories.vd_cat_id = pd_videos.fk_vid_cat_id
                               ORDER BY pd_videos.vd_created DESC');

        $results = $this->db->resultSet();
        return $results;
    }


    public function getAllSlides(){
        $this->db->query('SELECT * FROM pd_slides ORDER BY pd_slides.sl_created DESC');

        $results = $this->db->resultSet();
        return $results;
    }


    //// COUNT FUNCTIONS
    public function countEmails(){
        $this->db->query('SELECT COUNT(*) AS em 
                               FROM email_list WHERE em_created >= DATE(NOW()) + INTERVAL -7 DAY');
        $results = $this->db->resultSet();
        return $results;

    }

    public function countVideos(){
        $this->db->query('SELECT COUNT(*) AS vi 
                               FROM pd_videos WHERE vd_created');
        $results = $this->db->resultSet();
        return $results;

    }


    public function countImages(){
        $this->db->query('SELECT COUNT(*) AS im 
                               FROM pd_images WHERE gl_created');
        $results = $this->db->resultSet();
        return $results;

    }


    public function countPosts(){
        $this->db->query('SELECT COUNT(*) AS rs 
                               FROM pd_blog WHERE ps_created >= DATE(NOW()) + INTERVAL -7 DAY');
        $results = $this->db->resultSet();
        return $results;

    }

    //////////////// DELETE FUNCTIONS //////////////////////////////////////////////


    public function delEmail($id) {

        $this->db->query('DELETE FROM email_list WHERE em_id = :id');
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delPost($id) {

        $this->db->query('DELETE FROM pd_blog WHERE ps_id = :id');
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function delNews($id) {

        $this->db->query('DELETE FROM pd_news WHERE ns_id = :id');
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delVideo($id) {

        $this->db->query('DELETE FROM pd_videos WHERE vd_id = :id');
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delImage($id) {

        $this->db->query('DELETE FROM pd_images WHERE gl_id = :id');
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function delSlide($id) {

        $this->db->query('DELETE FROM pd_slides WHERE sl_id = :id');
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



}