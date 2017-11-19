var maxLengthTweet = 140;
var modalContainer = document.querySelector('div.modal-container');

new Vue({

	el:".twiter-modal-component",

	data: {
		tweet: "",
		photos: [],
		isActive: false,
		isModalActive: false	
	},

	methods: {
		handlePhotoUpload: function(e) {
		  var reader = new FileReader();
		      
		  reader.onload = function(e) {
		    // Set that base 64 string to our data model's 'photo' key
		    this.photo = (e.target.result);
		  }
		  // Read upload file as base 64  string
		  reader.readAsDataURL(e.target.files[0]);
		 },

		 toggleModal: function(e){
		 	this.isModalActive = !this.isModalActive;
		 }
  	},

	computed: {
		charactersRemaining: function(){
		  return maxLengthTweet - this.tweet.length;
		},

		tweetIsOutOfRange: function() {
		  return this.charactersRemaining > maxLengthTweet 
		      || this.charactersRemaining < 0;
		 },

		 charactersUnder20: function(){
		  return this.charactersRemaining <= 20; 
		 },

		 charactersUnder10: function(){
		  return this.charactersRemaining <= 10; 
		 },

		 photoHasBeenUploaded: function() {
  			return this.photos.length > 0;
		}
	}
});