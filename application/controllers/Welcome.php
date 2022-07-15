<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Dental clinic in Gurgaon, Nearest dental clinic - Dental Panache";
	    $data['description'] = "We at Dental Panache-a dental clinic in Gurgaon, offer ethical and quality implant and cosmetic dentistry services in our state-of-the-art clinic.";
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function dental_tourism()
	{
		$data['title'] = "Dental Tourism Services in Gurgaon | Dental Panache";
	    $data['description'] = "At Dental Panache, we offer a free online consultation before arrival to help you plan your duration of stay in India and cost of treatment. We follow an ethical practice with a strict sterilization protocol and offer the best quality services with a transparency of pricing.";
		$this->load->view('header',$data);
		$this->load->view('dental-tourism');
		$this->load->view('footer');
	}

	public function Teeth_whitening()
	{
		$data['title'] = "Teeth Whitening in Gurgaon, Teeth Whitening Cost - Dental Panache";
	    $data['description'] = "Teeth whitening in Gurgaon. The best treatment of Teeth whitening is one of the most effective treatments one must go for. With the treatment, individuals can get instant sparkly teeth.";
		$this->load->view('header',$data);
		$this->load->view('services/teeth-whitening');
		$this->load->view('footer');
	}

	public function Porcelain_veneers()
	{
		$data['title'] = "Porcelain veneers";
	    $data['description'] = "Teeth whitening in Gurgaon. The best treatment of Teeth whitening is one of the most effective treatments one must go for. With the treatment, individuals can get instant sparkly teeth.";
		$this->load->view('header',$data);
		$this->load->view('services/porcelain-veneers');
		$this->load->view('footer');
	}

	public function Dental_implants()
	{
		$data['title'] = "Dental Implant Cost in Gurgaon | Tooth Implant Near Me - Dental Panache";
	    $data['description'] = "You can find most reasonable Dental Implant Cost in Gurgaon at Dental Panache. The dentists have the best treatment to get patients relieved from pain.";
		$this->load->view('header',$data);
		$this->load->view('services/dental-implants');
		$this->load->view('footer');
	}

	public function Root_canal_treatment()
	{
		$data['title'] = "Best Root Canal Treatment in Gurgaon, RCT in Gurgaon - Dental Panache";
	    $data['description'] = "Choosing best root canal treatment in Gurgaon is an effective way to save the tooth when it is decayed or fractured at the level of the pulp.";
		$this->load->view('header',$data);
		$this->load->view('services/root-canal-treatment');
		$this->load->view('footer');
	}

	public function Dental_crowns_bridges()
	{
		$data['title'] = "Teeth Whitening, Teeth Whitening Cost in Gurgaon - Dental Panache";
	    $data['description'] = "Teeth Whitening.For attaining that flawless and beautiful smiles all your life, never forget to choose the most affordable teeth whitening treatment from the finest dentist in Gurgaon.";
		$this->load->view('header',$data);
		$this->load->view('services/dental-crowns-bridges');
		$this->load->view('footer');
	}

	public function Invisible_braces_aligners()
	{
		$data['title'] = "Invisible Braces in Gurgaon | Invisible Braces & Aligners - Dental Panache";
	    $data['description'] = "Invisible Braces in Gurgaon - Are your metal braces making you conscious? You can now get an instant confidence boost with invisible braces in Gurgaon.";
		$this->load->view('header',$data);
		$this->load->view('services/invisible-braces-aligners');
		$this->load->view('footer');
	}

	public function Kids_dentist()
	{
		$data['title'] = "Kids Dentist in Gurgaon | Kids Dental Clinics in Gurgaon - Dental Panache";
	    $data['description'] = "Children need special attention when it comes to taking care of their teeth. For your children, Kids Dentist in Gurgaon can be the best pick when thinking about their dental health.";
		$this->load->view('header',$data);
		$this->load->view('services/kids-dentist');
		$this->load->view('footer');
	}

	public function Tooth_Extraction()
	{
		$data['title'] = "Tooth Extraction in Gurgaon | Painless Tooth Extraction - Dental Panache";
	    $data['description'] = "Soring of the jaw, bruising and any other kind of swelling after the removal is deemed to be normal. In such cases, tooth extraction in Gurgaon is the best treatment.";
		$this->load->view('header',$data);
		$this->load->view('services/tooth-extraction');
		$this->load->view('footer');
	}

	public function Dental_Emergency()
	{
		$data['title'] = "Emergency dentist near me, emergency dental services - Dental Panache";
	    $data['description'] = "Emergency dentist near me. For effective emergency dental services, Dental Panache can be contacted. The dentists are always ready with immediate help.";
		$this->load->view('header',$data);
		$this->load->view('services/dental-emergency');
		$this->load->view('footer');
	}
	
	public function Covid19_consent_form()
	{
		$data['title'] = "Cosmetic Dentist in Gurgaon, Cosmetic Dentist India | Dental Panache";
	    $data['description'] = "Your smile is the precious ornament you wear! So, never get late in attaining the dental services from the finest of the cosmetic dentist in Gurgaon to keep it in the pink of the health.";
		$this->load->view('header',$data);
		$this->load->view('services/consent-form');
		$this->load->view('footer');
	}

	public function Educational_videos()
	{
		$data['title'] = "Educational videos";
	    $data['description'] = "Educational videos";
		$this->load->view('header',$data);
		$this->load->view('gallery/educational-videos');
		$this->load->view('footer');
	}

	public function Video_Testimonials()
	{
		$data['title'] = "Video Testimonials";
	    $data['description'] = "Video Testimonials";
		$this->load->view('header',$data);
		$this->load->view('gallery/video-testimonials');
		$this->load->view('footer');
	}

	public function Gallery()
	{
		$data['title'] = "Gallery";
	    $data['description'] = "Gallery";
		$this->load->view('header',$data);
		$this->load->view('gallery/gallery');
		$this->load->view('footer');
	}

	public function Faqs()
	{
		$data['title'] = "Faqs";
	    $data['description'] = "Faqs";
		$this->load->view('header',$data);
		$this->load->view('faqs');
		$this->load->view('footer');
	}

	public function About_us()
	{
		$data['title'] = "Best Dentist in Gurgaon, Dentist in Gurgaon - Dental Panache";
	    $data['description'] = "Best Dentist in Gurgaon. Finding the best dentist in Gurgaon is now easier as Dental Panache is here with the excellent dental services for every age group.";
		$this->load->view('header',$data);
		$this->load->view('about-us');
		$this->load->view('footer');
	}

	public function Clinic_Tour()
	{
		$data['title'] = "Clinic Tour";
	    $data['description'] = "Clinic Tour";
		$this->load->view('header',$data);
		$this->load->view('clinic-tour');
		$this->load->view('footer');
	}

	public function Contact_US()
	{
		$data['title'] = "Contact Us";
	    $data['description'] = "Contact Us";
		$this->load->view('header',$data);
		$this->load->view('contact-us');
		$this->load->view('footer');
	}

	public function thank_you(){
		$data['title'] = "Thank You";
	    $data['description'] = "Thank You";
		$this->load->view('header',$data);
		$this->load->view('thank-you');
		$this->load->view('footer');
	}

 

	public function blog(){
		$data['title'] = "Blog";
	    $data['description'] = "Blog";
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}

	public function blogslug(){
	   require(APPPATH . 'vendor/autoload.php');
       $url = 'https://industrialpropertiesingurgaon.in/ajdp/wp-json/wp/v2/posts?slug=' . $this->uri->segment(1) . '&_embed';
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       $output = curl_exec($ch);
       curl_close($ch);
       $post = json_decode($output, true);
       
       if(empty($post)){
           show_404();
           exit;
       }
        $data['posts'] = $post;
        $data['title'] = $post[0]['title']['rendered'];
        $data['description'] = $post['title']['rendered'];
        $data['sourceurl'] = $post[0]['_embedded']['wp:featuredmedia'][0]['source_url'];
     
		$this->load->view('header',$data);
		$this->load->view('blogslug',$data);
		$this->load->view('footer');
	}

	public function category(){
	    $this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	
	public function notfound(){
	    $data['description'] = "404 Page";
	    $data['title'] = "404 Page";
	    $this->load->view('header',$data);
	    $this->load->view('notfound');
	    $this->load->view('footer');
	}
}
