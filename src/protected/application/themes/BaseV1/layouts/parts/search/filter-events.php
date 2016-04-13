<div id="filter-events" class="entity-filter clearfix" ng-show="data.global.filterEntity === 'event'">
    <header class="clearfix">
        <a href="<?php echo $app->getBaseUrl() ?>" class="icon icon-go-back"></a>
        Eventos
        <a class="icon icon-show-advanced-search" ng-click="toggleAdvancedFilters()"></a>
    </header>
    <div ng-show="!collapsedFilters && !showInfobox()">
        <div class="section group">
            <form class="form-palavra-chave filter search-filter--keyword col span_2_of_3">
                <label for="palavra-chave-evento">Palavra-chave</label>
                <input ng-model="data.event.keyword" class="search-field" type="text" name="palavra-chave-evento" placeholder="Buscar eventos" />
            </form>
        </div>

        <div class="section group">
            <!--.filter-->
            <div class="filter search-filter--date col span_1_of_3">
                <label class="show-label" for="data-de-inicio">De</label>
                <input id="data-de-inicio" class="data" ng-model="data.event.from" ui-date="dateOptions" ui-date-format="yy-mm-dd" placeholder="00/00/0000" readonly="readonly" /> <label class="show-label">a</label>
                <input class="data" ng-model="data.event.to" ui-date="dateOptions" ui-date-format="yy-mm-dd" placeholder="00/00/0000" readonly="readonly" />
            </div>
            <!--.filter-->
            <div class="filter search-filter--linguagem col span_1_of_3">
                <label>Linguagem</label>
                <div class="dropdown">
                    <div class="placeholder">Linguagens</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list select">
                            <li ng-repeat="linguagem in linguagens" ng-class="{'selected':isSelected(data.event.linguagens, linguagem.id)}" ng-click="toggleSelection(data.event.linguagens, linguagem.id)">
                                <span>{{linguagem.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter search-filter--classificacao col span_1_of_3">
                <span class="label">Classificação</span>
                <div id="classificacao" class="dropdown">
                    <div class="placeholder">Classificação</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list select">
                            <li ng-repeat="classificacao in classificacoes" ng-class="{'selected':isSelected(data.event.classificacaoEtaria, classificacao.id)}" ng-click="toggleSelection(data.event.classificacaoEtaria, classificacao.id)">
                                <span>{{classificacao.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section group"> 
            <!--.filter-->
            <div class="filter search-filter--estado col span_1_of_3">
                <span class="label">Estado</span>
                <div id="estado" class="dropdown">
                    <div class="placeholder">Estado</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list select">
                            <li ng-class="{'selected':true}"><span>SP</span></li>
                            <li ng-class="{'selected':false}"><span>AB</span></li>
                            <li ng-class="{'selected':false}"><span>CD</span></li>
                            <li ng-class="{'selected':false}"><span>EF</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter search-filter--municipio col span_1_of_3">
                <span class="label">Município</span>
                <div id="estado" class="dropdown">
                    <div class="placeholder">Município</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list select">
                            <li ng-class="{'selected':true}"><span>São Paulo</span></li>
                            <li ng-class="{'selected':false}"><span>Nome Bem Grande do Espírito Santo do Sul</span></li>
                            <li ng-class="{'selected':false}"><span>Rio de Janeiro</span></li>
                            <li ng-class="{'selected':false}"><span>Lorem Ipsum</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter verified-filter search-filter--verified col span_1_of_3">
                <a class="hltip btn btn-verified" ng-class="{'selected':data.event.isVerified}" title="Exibir somente resultados Verificados" ng-click="toggleVerified('event')"><?php $this->dict('search: verified results') ?></a>
            </div>
        </div>
    </div>
</div>