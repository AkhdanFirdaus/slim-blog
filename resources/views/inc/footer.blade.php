<footer id="footer" class="text-center" style="margin-top: 20px;background-color: #2C3E50;color: #fff;padding: 20px;">
    Created with <i class="fa fa-heart" style="color: #C54641;"></i> by AkhdanFirdaus &copy; 2018
    @if (Request::is('profile'))
        <div class="pull-right">
            <a onclick="history.go(-1)" class="btn btn-primary"><span class="fa fa-chevron-left"></span></a>
            <a href="/" class="btn btn-primary"><span class="fa fa-home"></span></a>
        </div>
    @endif
</footer>
