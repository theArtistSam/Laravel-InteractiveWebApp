function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight) + "px";
}

function showSearchBar(){
    document.getElementById('search-icon').src = '../../icons/search_filled.svg'
    document.getElementById('search-bar').style.visibility = 'visible'
}

function closeSearchBar(){
    document.getElementById('search-icon').src = '../../icons/search.svg'    
    document.getElementById('search-bar').style.visibility = 'hidden'    
}