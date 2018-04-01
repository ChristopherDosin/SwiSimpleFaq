{extends file="parent:frontend/custom/index.tpl"}

{block name="frontend_index_body_classes"}{$smarty.block.parent}{strip} is--ctl-custom{/strip}{/block}

{* Custom page tab headline *}
{block name="frontend_custom_article_headline"}
    {block name="frontend_faq_headline"}
        <h1 class="custom-page--tab-headline">Fragen & Antworten Übersicht</h1>
    {/block}
{/block}

{* Custom page tab inner content *}
{block name="frontend_custom_article_content"}
    {block name="frontend_faq_content"}
        {if !empty($faq)}
            {foreach $faq as $item}
                {if $item.active == true}
                    {block name="frontend_faq_collapse_header"}
                        <div class="collapse--header" data-collapse-panel="true" data-animationSpeed="200">
                            {$item.question}
                            <span class="collapse--toggler"></span>
                        </div>
                    {/block}
                    {block name="frontend_faq_collapse_content"}
                        <div class="collapse--content">
                            <div class="panel">
                                <div class="panel--body">
                                    {$item.answer}
                                </div>
                            </div>
                        </div>
                    {/block}
                {/if}
            {/foreach}
        {else}
            {block name="frontend_faq_alert"}
                <div class="alert is--info is--rounded">
                    <div class="alert--icon">
                        <i class="icon--element icon--info"></i>
                    </div>
                    <div class="alert--content">{s name="frontend_faq_alert_text"}Es sind keine Fragen & Antworten verfügbar, bitte schauen Sie später noch einmal vorbei.{/s}</div>
                </div>
            {/block}
        {/if}
    {/block}
{/block}