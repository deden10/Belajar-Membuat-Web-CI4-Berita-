                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <?php if ($pager->hasPrevious()) : ?>
                                <li class="page-item">
                                    <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>"
                                        class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <?php endif ?>
                                <?php foreach ($pager->links() as $link) : ?>
                                <li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
                                    <a href="<?= $link['uri'] ?>" class="page-link"><?= $link['title'] ?></a>
                                </li>
                                <?php endforeach ?>
                                <?php if ($pager->hasNext()) : ?>
                                <li class="page-item">
                                    <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                                <?php endif ?>
                            </ul>
                        </nav>