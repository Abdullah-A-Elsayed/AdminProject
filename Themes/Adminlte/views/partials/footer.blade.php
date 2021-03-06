<div class="modal fade" id="keyboardShortcutsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    {{ trans('core::core.general.available keyboard shortcuts') }}
                </h4>
            </div>
            <div class="modal-body">
                @yield('shortcuts')
            </div>
        </div>
    </div>
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>

    @yield('footer')
    <strong> Developed by :<a href="https://www.linkedin.com/in/bola-erian-nasr-24391764/" target="_blank">Bola E.Nasr </a>
    &
    <a href="https://www.linkedin.com/in/abdullah-ali-a15781155/" target="_blank">Abdullah Ali</a>
    </strong>
</footer>

