<div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">
                        <div class="row">
                            @isset($titulo)
                                <div class="col">
                                    {{ $titulo }}
                                </div>
                            @endisset

                            @isset($button)
                            <span class="col text-right">
                                {{ $button }}
                            </span>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>