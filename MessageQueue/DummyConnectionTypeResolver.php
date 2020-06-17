<?php
declare(strict_types=1);

namespace Yireo\Fixes\MessageQueue;

use Magento\Framework\MessageQueue\ConnectionTypeResolverInterface;

class DummyConnectionTypeResolver implements ConnectionTypeResolverInterface
{
    /**
     * @inheritDoc
     */
    public function getConnectionType($connectionName)
    {
        return 'foobar';
    }
}
