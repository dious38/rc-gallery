<?php

use PHPUnit\Framework\TestCase;
use RichCourt\Plugin\Content\SnapGallery\Helper\TagUtils;

class SnapGalleryTagUtilsTest extends TestCase
{
    /**
     * @dataProvider providesArticleTextsAndGalleryTagMatches
     */
    public function testFindMatches(?array $expected, string $original): void
    {
        $this->assertSame($expected, TagUtils::findMatches($original));
    }

    public function providesArticleTextsAndGalleryTagMatches(): array
    {
        return [
            'No matches returns null' => [
                null,
                '<p>Some content</p><p>More content</p>',
            ],
            'A single, basic match' => [
                [
                    [
                        '{gallery}directory{/gallery}',
                    ],
                    [
                        'directory',
                    ],
                ],
                '<p>Some content</p>{gallery}directory{/gallery}<p>More content</p>',
            ],
            'Multiple matches' => [
                [
                    [
                        '{gallery}directory{/gallery}',
                        '{gallery}other-dir{/gallery}',
                    ],
                    [
                        'directory',
                        'other-dir',
                    ],
                ],
                '<p>Some content</p>{gallery}directory{/gallery}<p>More content</p>{gallery}other-dir{/gallery}',
            ],
            'A single match, with inline params' => [
                [
                    [
                        '{gallery layout="Horizontal_Scroller" target-row-height="200"}directory{/gallery}',
                    ],
                    [
                        'directory',
                    ],
                ],
                '<p>Some content</p>{gallery layout="Horizontal_Scroller" target-row-height="200"}directory{/gallery}<p>More content</p>',
            ],
        ];
    }
}
