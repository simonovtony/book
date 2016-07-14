window.addEventListener('load', function() {
    var modal = document.getElementById('myModal');
    
    var btn = document.getElementById('myBtn');
    
    var span = document.getElementsByClassName('close')[0];
    
    btn.addEventListener('click', function() {
        modal.style.display = 'block';
    });
    
    span.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    
    window.addEventListener('click', function() {
        if(event.target == modal) {
            modal.style.display = 'none';
        }
    });
});