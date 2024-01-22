function hideWallpaper(){
    document.getElementById("image-clicked").style.visibility = "hidden";
}
// Check localStorage when the page loads
document.addEventListener('DOMContentLoaded', function () {
    var imageClickedVisible = localStorage.getItem('imageClickedVisible');
    if (imageClickedVisible === 'true') {
        document.getElementById("image-clicked").style.visibility = "visible";
    }
});
function showWallpaper(index){
    
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    $.ajax({
        url: '/',
        type: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        data: JSON.stringify({ index: index }),
        success: function (data) {
            // Handle success response
            console.log(data);

            // Set a flag in localStorage to keep the element visible
            localStorage.setItem('imageClickedVisible', 'true');

            // Reload the page
            location.reload();
        
        },
        error: function (xhr, status, error) {
            // Handle error response
            console.error('Error:', xhr.responseText);
        }
    });
}


function showSearchBar(){
    document.getElementById('search-icon').src = '../../icons/search_filled.svg'
    document.getElementById('search-bar').style.visibility = 'visible'
}

function closeSearchBar(){
    document.getElementById('search-icon').src = '../../icons/search.svg'    
    
    // input data
    const inputData = document.getElementById('title').value;

    // console.log('Input data:', inputData);

    if (inputData != null) {
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        $.ajax({
            url: '/Home',
            type: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            data: JSON.stringify({inputData: inputData}),
            success: function (data) {
                // Handle success response
                console.log(data);

                // Set a flag in localStorage to keep the element visible
                // localStorage.setItem('wallpaperSearched', 'true');

                // Reload the page
                // location.reload();
            },
            error: function (xhr, status, error) {
                // Handle error response
                console.error('Error:', xhr.responseText);
            }
        });
    }
    // window.location.href = '/';
    document.getElementById('search-bar').style.visibility = 'hidden'    
}

// Check localStorage when the page loads
// document.addEventListener('DOMContentLoaded', function () {
//     var imageClickedVisible = localStorage.getItem('wallpaperSearched');
//     if (imageClickedVisible === 'true') {
//         document.getElementById("image-clicked").style.visibility = "visible";
//     }
// });

// Voice navigation
let isRecognitionActive = false;

function handleSpeechCommand(command) {
    if (command === 'scroll down') {
        window.scrollBy(0, window.innerHeight);
    } else if (command === 'scroll up') {
        window.scrollBy(0, -window.innerHeight);
    } else if (command === 'go to home') {
        window.location.href = 'home.html';
    } else if (command === 'go to features') {
        window.location.href = 'features.html';
    } else if (command === 'go to services') {
        window.location.href = 'Services.html';
    } else if (command === 'go to gallery') {
        window.location.href = 'gallery.html';
    }
    else if (command === 'go to login') {
        window.location.href = 'login.html';
    }
    else if (command === 'go to registration') {
        window.location.href = 'register.html';
    }
    else if (command === 'scroll slider') {
        scrollSlider();
    }
    else {
        console.log('Unrecognized command:', command);
    }
}


// New function for scrolling the slider
function scrollSlider() {
    const sliderDiv = document.querySelector('.overflow-x-auto');
    if (sliderDiv) {
        sliderDiv.scrollLeft += window.innerWidth;
    }
}



function voiceNavigate(){
    // Voice navigation
    let isRecognitionActive = false;

    function handleSpeechCommand(command) {
        if (command === 'scroll down') {
            window.scrollBy(0, window.innerHeight);
        } else if (command === 'scroll up') {
            window.scrollBy(0, -window.innerHeight);
        } else if (command === 'go to home') {
            window.location.href = '../../pages/Home/Home.html';
        } else if (command === 'go to profile') {
            window.location.href = '../../pages/Profile/profile.html';
        } else if (command === 'go to services') {
            window.location.href = 'Services.html';
        } else if (command === 'go to gallery') {
            window.location.href = 'gallery.html';
        }
        else if (command === 'go to login') {
            window.location.href = 'login.html';
        }
        else if (command === 'go to registration') {
            window.location.href = 'register.html';
        }
        else if (command === 'scroll slider') {
            scrollSlider();
        }
        else {
            console.log('Unrecognized command:', command);
        }
    }


    // New function for scrolling the slider
    function scrollSlider() {
        const sliderDiv = document.querySelector('.overflow-x-auto');
        if (sliderDiv) {
            sliderDiv.scrollLeft += window.innerWidth;
        }
    }

    // Speech recognition setup
    const recognition = new webkitSpeechRecognition() || new SpeechRecognition();
    recognition.lang = 'en-US';

    recognition.onresult = function (event) {
        if (!isRecognitionActive) return;

        const speechResult = event.results[0][0].transcript.trim().toLowerCase();
        console.log('Speech Recognition Result:', speechResult);
        handleSpeechCommand(speechResult);
    };

    // Start speech recognition when the button is clicked
    document.querySelector('#voice').addEventListener('click', () => {
        if (isRecognitionActive) return;

        isRecognitionActive = true;
        recognition.start();
    });

    recognition.onend = function () {
        isRecognitionActive = false;
    };
}

// ----------------------------------------------
// Handle Unsplash API Events

// declaration of variables
// const navbar = document.getElementById("nav");
// const brandName = document.getElementById("brand");
// const searchKey = document.getElementById("searchKey");
// const searchBtn = document.getElementById("searchBtn");
// const searchQuery = document.getElementById("searchQuery");
// const modalBody = document.getElementById("modalBody");
// const imageViewLink = document.getElementById("imageViewLink");

var orderByValue = '';

// APIs.
// API_KEY = "uBKIG1jkH0aEymy0Mvjx_X0Ii0LbuzAhIrGy6Xm6HnE";
API_KEY = "na52seY-hERdUQgyhYnqeBxm39Wpck_BCuBNXpnn_GM"
apiUrl = "https://api.unsplash.com/photos/?client_id=" + API_KEY + "&per_page=10";
searchUrl = "https://api.unsplash.com/search/photos/?client_id=" + API_KEY + "&query=";

// console.log(apiUrl);
// console.log(searchUrl);


// Wallpapers columns
const column1 = document.getElementById("wallpaper-col-1");
const column2 = document.getElementById("wallpaper-col-2");
const column3 = document.getElementById("wallpaper-col-3");
const errorGrid = document.getElementById("error-grid");

imageURLS = [];

const fetchData = async () => {

    var tempUrl = apiUrl;

    if(orderByValue != '') {
        tempUrl += ('&order_by=' + orderByValue);
    }

    const response = await (fetch(apiUrl).catch(handleError));
    const myJson = await response.json();

    var imageArrays = myJson;
    console.log(myJson);
    imageArrays.forEach(element => {
        imageURLS.push(element.urls.small);
    });

    // displayImage();

}

var handleError = function(err) {
    console.warn(err);
    errorGrid.innerHTML = "<h4>Unable to fetch data " + err + "</h4>";
}

// When the window opens up load all the images
window.addEventListener("load", fetchData);

// Wallpaper{
//     string: email (FK)
//     _________
//     string: title,
//     string: description,
//     int: totalViews,
//     int: totalDownloads,
//     string: dimmension,
//     string: camera,
//     bool: isFavourite,
//     string: dataAdded (DD, MM, YY),
//     arr -> string: allTags
//     }

const wallpaperModel = {
    
    // user data
    'userName': '', // firstName + LastName (if not null)
    'userProfileImage': '',
    'userInstagramLink' : '', //@smth

    // ------------
    'title': '',
    'description': '',
    'totalViews': '',
    'dimmension': '',
    'camera': '',
    'dateAdded': '',
    // no tags for now 
}

function displayImage() {
    errorGrid.innerHTML = "";
    if(imageURLS.length == 0) {
        errorGrid.innerHTML = "<h4>Unable to fetch data.</h4>";
        return;
    }

    column1.innerHTML = "";
    column2.innerHTML = "";
    column3.innerHTML = "";

    imageURLS.forEach((url,index) => {
        // dynamic image tag 
        var image = document.createElement('img');
        image.src = url;
        image.className="pt-4";
        image.setAttribute("width", "100%");
        image.setAttribute("onclick","displayFullImage(this.src)");

        if( (index + 1) % 3 == 0 ) {
            column1.appendChild(image);
        }
        if( (index + 2) % 3 == 0 ) {
            column2.appendChild(image);
        }
        if( (index + 3) % 3 == 0 ) {
            column3.appendChild(image);
        }
        
    });

}

// function displayFullImage(src) {

//     // dynamic image tag 
//     var image = document.createElement('img');
//     image.src = src;
//     image.className="mt-3";
//     image.setAttribute("width", "100%");

//     modalBody.innerHTML = "";
//     modalBody.appendChild(image);

//     imageViewLink.href=src;

//     var myModal = new bootstrap.Modal(document.getElementById('modal'), {});
//     myModal.show();
// }

// searchBtn.addEventListener("click",function() {

//     if(searchKey.value != ''){
//         fetchSearchData(searchKey.value);
//     }

// });

// const fetchSearchData = async (key) => {

//     imageURLS = [];

//     var orderbyvar = orderByValue; 
//     var tempUrl = searchUrl + key;

//     if(orderbyvar != '') {
//         tempUrl += ("&order_by="+orderbyvar);
//     }

//     searchQuery.innerHTML = searchKey.value;
    
//     let response = await (fetch(tempUrl).catch(handleError));
//     let myJson = await response.json();
//     tempUrl += "&per_page="+myJson.total;

//     response = await (fetch(tempUrl).catch(handleError));
//     myJson = await response.json();

//     console.log(myJson);

//     var imageArrays = myJson.results;

//     imageArrays.forEach(element => {
//         imageURLS.push(element.urls.regular);
//     });

//     displayImage();

// }

// function orderBy() {
//     orderByValue = document.getElementById("orderby").value;
//     imageURLS = [];

//     if(searchKey.value != '') {
//         fetchSearchData(searchKey.value);
//     }else {
//         fetchData();
//     }
// }


// document.getElementById("pagination").addEventListener("select.uk.pagination",function(e,page){
//     alert(page);
// })