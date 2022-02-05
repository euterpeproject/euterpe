jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initaudioplayer-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingaudioplayer-1").amazingaudioplayer({
        jsfolder:jsFolder,
        skinsfoldername:"",
        titleinbarwidthmode:"fixed",
        timeformatlive:"%CURRENT% / LIVE",
        volumeimagewidth:24,
        barbackgroundimage:"374.jpg",
        showtime:false,
        titleinbarwidth:80,
        showprogress:true,
        random:false,
        titleformat:"%TITLE%",
        height:600,
        loadingformat:"Loading...",
        prevnextimage:"prevnext-48-48-0.png",
        showinfo:true,
        imageheight:100,
        skin:"DarkBox",
        loopimage:"loop-24-24-2.png",
        loopimagewidth:24,
        showstop:true,
        prevnextimageheight:48,
        infoformat:"%ARTIST% %ALBUM%<br />%INFO%",
        stopotherplayers:true,
        showloading:false,
        forcefirefoxflash:false,
        showvolumebar:true,
        imagefullwidth:false,
        width:300,
        showtitleinbar:false,
        showloop:true,
        volumeimage:"volume-24-24-2.png",
        playpauseimagewidth:48,
        loopimageheight:24,
        tracklistitem:10,
        tracklistitemformat:"%ID%. %TITLE% <span style='position:absolute;top:0;right:0;'>%DURATION%</span>",
        prevnextimagewidth:48,
        tracklistarrowimage:"tracklistarrow-48-16-0.png",
        playpauseimageheight:48,
        showbackgroundimage:true,
        imagewidth:100,
        stopimage:"stop-48-48-0.png",
        playpauseimage:"playpause-48-48-0.png",
        showprevnext:true,
        backgroundimage:"euterpe1.jpg",
        autoplay:false,
        volumebarpadding:8,
        progressheight:8,
        showtracklistbackgroundimage:false,
        titleinbarscroll:true,
        showtitle:true,
        defaultvolume:-1,
        tracklistarrowimageheight:16,
        heightmode:"auto",
        titleinbarformat:"%TITLE%",
        showtracklist:true,
        stopimageheight:48,
        volumeimageheight:24,
        stopimagewidth:48,
        volumebarheight:72,
        noncontinous:false,
        tracklistbackgroundimage:"",
        showbarbackgroundimage:true,
        showimage:true,
        tracklistarrowimagewidth:48,
        timeformat:"%CURRENT% / %DURATION%",
        showvolume:true,
        fullwidth:false,
        loop:1,
        preloadaudio:true
    });
});