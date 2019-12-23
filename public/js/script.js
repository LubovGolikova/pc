$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



let verseId = $('.add-like').attr('data-id');
//Likes
let likesStorage = JSON.parse(localStorage.getItem('likes')) || [];
//console.log(likesStorage)
if( likesStorage.indexOf( verseId ) >=0 ){
    $('.add-like').toggleClass('fa-heart-o fa-heart');
}
$('.add-like').click(function(){
    let elem = $(this);
    if(elem.hasClass('fa-heart-o')){
        $.ajax({
            method: 'GET',
            url: '/verses/'+verseId+'/addLike',
            success: function(data){
                elem.next('.like-count').text(data);
                elem.toggleClass('fa-heart-o fa-heart');
                likesStorage.push(verseId);
                localStorage.setItem('likes', JSON.stringify(likesStorage))
            }
        })
    }
});

//Views last verses

$.ajax({
    method: 'POST',
    url: '/verses/getViews',
    data: 'ids='+localStorage.getItem('views'),
    success: function(data){
        let verses = JSON.parse(data)
        if(verses.length==0 || (verses.length==1 && verses[0].id==verseId)){
            $('.last-views-verses').hide()
        }
        else{
            let versesHTML='';
            for(let i = 0; i<verses.length;i++){
                if(verses[i].id != verseId)
                    versesHTML+=`<a href="/verses/${verses[i].id}">${verses[i].name}</a>`
            }
            $('.content-views-verses').html(versesHTML)
        }
    }
})


let viewsStorage = JSON.parse(localStorage.getItem('views')) || [];
if(verseId){
        if( viewsStorage.indexOf( verseId ) < 0 ){
            viewsStorage.unshift(verseId);
        if(viewsStorage.length > 10){
            viewsStorage.splice(10)
         }
    localStorage.setItem('views', JSON.stringify(viewsStorage));
         }
    }



