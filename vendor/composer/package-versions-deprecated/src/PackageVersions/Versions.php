<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'components/font-awesome' => '5.15.3@09f1f2e02ea0cd319569b32f8639b37dfcd7a62d',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.0@67d56d3203b33db29834e6b2fcdbfdc50535d796',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.1@a08bc3b4d8567cdff05e89b272ba1e06e9d71c21',
  'doctrine/doctrine-migrations-bundle' => '2.2.2@85f0b847174daf243362c7da80efe1539be64f47',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.0.2@1febd6c3ef84253d7c815bed85fc622ad207a9f8',
  'doctrine/migrations' => '2.3.3@c4c46f7064f6e7795bd7f26549579918b46790fa',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'markbaker/complex' => '1.5.0@c3131244e29c08d44fefb49e0dd35021e9e39dd2',
  'markbaker/matrix' => '1.2.3@44bb1ab01811116f01fe216ab37d921dccc6c10d',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpoffice/phpspreadsheet' => '1.12.0@f79611d6dc1f6b7e8e30b738fc371b392001dbfd',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/framework-extra-bundle' => 'v5.5.7@6c0fa4e0e6dc3be90f7b40fa832aa47ec7dd801a',
  'symfony/asset' => 'v4.4.20@f2204a526c34945b1614cde033692983b6102eb8',
  'symfony/cache' => 'v4.4.21@b7ff54be3f3eb1ce09643692f0c309b1b27bc992',
  'symfony/cache-contracts' => 'v1.1.10@8d5489c10ef90aa7413e4921fc3c0520e24cbed7',
  'symfony/config' => 'v4.4.20@98606c6fa1a8f55ff964ccdd704275bf5b9f71b3',
  'symfony/console' => 'v4.4.21@1ba4560dbbb9fcf5ae28b61f71f49c678086cf23',
  'symfony/debug' => 'v4.4.20@157bbec4fd773bae53c5483c50951a5530a2cc16',
  'symfony/dependency-injection' => 'v4.4.21@b5f97557faa48ead4671bc311cfca423d476e93e',
  'symfony/doctrine-bridge' => 'v4.4.21@e643bddb38277b4a1c2973d1489768c6e6c0db80',
  'symfony/dotenv' => 'v4.4.20@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.21@48e81a375525872e788c2418430f54150d935810',
  'symfony/event-dispatcher' => 'v4.4.20@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.20@a6b2c711e4d4dcba4db7b36a8a1835b0720d07fe',
  'symfony/filesystem' => 'v4.4.21@940826c465be2690c9fae91b2793481e5cbd6834',
  'symfony/finder' => 'v4.4.20@2543795ab1570df588b9bbd31e1a2bd7037b94f6',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v4.4.21@9ced5b787916fb8a64819d63a4bcf7ddda46791c',
  'symfony/framework-bundle' => 'v4.4.21@fc72fbb0f9a69d2eb5d94cc8c231176265db680a',
  'symfony/http-client' => 'v4.4.21@911177e186b82e5b9a9f41c13af53699b6745657',
  'symfony/http-client-contracts' => 'v1.1.10@7e86f903f9720d0caa7688f5c29a2de2d77cbb89',
  'symfony/http-foundation' => 'v4.4.20@02d968647fe61b2f419a8dc70c468a9d30a48d3a',
  'symfony/http-kernel' => 'v4.4.21@0248214120d00c5f44f1cd5d9ad65f0b38459333',
  'symfony/inflector' => 'v4.4.21@9455097d23776a4a10c817d903271bc1ce7596ff',
  'symfony/intl' => 'v4.4.20@fe19cafd0ff661c2143c8717bb1dca0457794c1e',
  'symfony/mailer' => 'v4.4.21@76b64a4105634d89e1f7ee7f75851740fe8fe66b',
  'symfony/mime' => 'v4.4.21@50d7a1d569edad1f1321c59123c4c322c8daff7c',
  'symfony/monolog-bridge' => 'v4.4.21@3741314b95e8d0c11a485dce562898f5f67f455c',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v4.4.20@cd8c6a2778d5f8b5e8fc4b7abdf126790b5d5095',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v4.4.20@7e950b6366d4da90292c2e7fa820b3c1842b965a',
  'symfony/property-access' => 'v4.4.20@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/property-info' => 'v4.4.20@67845c335482cea0dd52497ae1314ce7a4978c74',
  'symfony/proxy-manager-bridge' => 'v4.4.20@811a39770b21f05bea9a737568074be4f02e7733',
  'symfony/routing' => 'v4.4.20@69919991c845b34626664ddc9b3aef9d09d2a5df',
  'symfony/security-bundle' => 'v4.4.21@607dcdb60ef74d63fbeb86549c52075f040ae4cc',
  'symfony/security-core' => 'v4.4.21@19a7caa988be4f013669a057861a1d2a3eacbbf3',
  'symfony/security-csrf' => 'v4.4.20@6864087a9c20eb4bb4063fc2f36954cec0ce28a6',
  'symfony/security-guard' => 'v4.4.20@20f522ada1eefb7c2f90cb83dcc76abb160c782f',
  'symfony/security-http' => 'v4.4.21@c5546b762376e4d9a806b08bf4495b2633573ff8',
  'symfony/serializer' => 'v4.4.20@9fa36329a06282e1fc856b84f645472a410c3922',
  'symfony/service-contracts' => 'v1.1.9@b776d18b303a39f56c63747bcb977ad4b27aca26',
  'symfony/stopwatch' => 'v4.4.20@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/translation' => 'v4.4.21@eb8f5428cc3b40d6dffe303b195b084f1c5fbd14',
  'symfony/translation-contracts' => 'v1.1.10@84180a25fad31e23bebd26ca09d89464f082cacc',
  'symfony/twig-bridge' => 'v4.4.21@f5d0492a38c5325d9c322d406dbe95bc26fc530d',
  'symfony/twig-bundle' => 'v4.4.20@7cee73b45e3bd963a0ab4184f1041dcdc85b6e86',
  'symfony/validator' => 'v4.4.21@c00da06b82b8591548f52b4d6aad0faa0985843e',
  'symfony/var-dumper' => 'v4.4.21@0da0e174f728996f5d5072d6a9f0a42259dbc806',
  'symfony/var-exporter' => 'v4.4.20@3a3ea598bba6901d20b58c2579f68700089244ed',
  'symfony/web-link' => 'v4.4.21@565789cb9293a71a92410f50e663b91c0c4c0eac',
  'symfony/yaml' => 'v4.4.21@3871c720871029f008928244e56cf43497da7e9d',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v2.13.1@57e96259776ddcacf1814885fc3950460c8e18ef',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/browser-kit' => 'v4.4.20@cfa8d92f95294747e3abc04969efee51ed374424',
  'symfony/css-selector' => 'v4.4.20@f907d3e53ecb2a5fad8609eb2f30525287a734c8',
  'symfony/debug-bundle' => 'v4.4.20@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/dom-crawler' => 'v4.4.20@be133557f1b0e6672367325b508e65da5513a311',
  'symfony/maker-bundle' => 'v1.30.2@a395a85aa4ded6c1fa3da118d60329b64b6c2acd',
  'symfony/phpunit-bridge' => 'v5.2.6@f2f94fd78379cdcdef09dd5025af791301913968',
  'symfony/web-profiler-bundle' => 'v4.4.21@bd848a0c0f3e7229e329adeea10e8945f70cb4c9',
  'paragonie/random_compat' => '2.*@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
  'symfony/polyfill-ctype' => '*@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
  'symfony/polyfill-iconv' => '*@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
  'symfony/polyfill-php71' => '*@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
  'symfony/polyfill-php70' => '*@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
  'symfony/polyfill-php56' => '*@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
  '__root__' => 'dev-master@c6281b211e0f8e60d0b7d53541d41eb662825c3e',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
