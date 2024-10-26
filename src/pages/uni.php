<div class="page uni">
    <h2><?= $translationTable['aau.header'][$lang] ?></h2>
    <div class="row">
        <? for($i = 10; $i > 0; $i--): ?>
        <div class="summaryItem">
            <div class="fl">
                <a target="_blank" class="noline" href="/static/p<?= $i ?>.pdf">
                    <div class="thumbnail p<?= $i ?>"></div>
                </a>
            </div>
            <div class="fl">
                <a target="_blank" class="noline" href="/static/p<?= $i ?>.pdf">
                    <h3><?= $translationTable['aau.p'.$i.'.header'][$lang] ?></h3>
                </a>
                <p>
                    <?= $translationTable['aau.p'.$i.'.content'][$lang] ?>
                    
                </p>
            </div>
            <p class="clear">
                <?= $translationTable['aau.p'.$i.'.links'][$lang] ?>
            
            </p>
        </div>
        <? endfor; ?>
    </div>
</div>