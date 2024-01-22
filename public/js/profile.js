function showSearchBar(){
    document.getElementById('search-icon').src = '../../icons/search_filled.svg'
    document.getElementById('search-bar').style.visibility = 'visible'
}

function closeSearchBar(){
    document.getElementById('search-icon').src = '../../icons/search.svg'    
    document.getElementById('search-bar').style.visibility = 'hidden'    
}