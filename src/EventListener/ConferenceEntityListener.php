<?php


namespace App\EventListener;


use App\Entity\Conference;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

class ConferenceEntityListener
{
    /** @var SluggerInterface  */
    private $slugger;

    /**
     * ConferenceEntityListener constructor.
     * @param SluggerInterface $slugger
     */
    public function __construct(SluggerInterface $slugger) {
        $this->slugger = $slugger;
    }

    /**
     * @param Conference $conference
     * @param LifecycleEventArgs $event
     */
    public function prePersist(Conference $conference, LifecycleEventArgs $event)
    {
        $conference->computeSlug($this->slugger);
    }

    /**
     * @param Conference $conference
     * @param LifecycleEventArgs $eventArgs
     */
    public function perUpdate(Conference $conference, LifecycleEventArgs $eventArgs)
    {
        $conference->computeSlug($this->slugger);
    }
}